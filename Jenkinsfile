pipeline {

    agent any

    environment {
        SWARM_STACK_NAME = "app"
        DB_SERVICE = "db"         
        DB_USER = "root"
        DB_PASSWORD = "root"
        DB_NAME = "notepaddb"
        FRONTEND_URL = "http://192.168.0.1:8080"
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build Docker Images') {
            steps {
                script {
                    sh "docker build -f php.Dockerfile -t dxrkn3ss/crud-backend:latest ."
                    sh "docker build -f mysql.Dockerfile -t dxrkn3ss/crud-mysql:latest ."            
                }
            }
        }
	
        stage('Deploy to Docker Swarm') {
            steps {
                script {
                    sh '''
                        if ! docker info | grep -q "Swarm: active"; then
                            docker swarm init || true
                        fi
                    '''
                    sh "docker stack deploy --with-registry-auth -c docker-compose.yaml ${SWARM_STACK_NAME}"
                }
            }
        }
	
        stage('Run Tests') {
            steps {
                script {
                    echo 'Ожидание запуска сервисов...'
                    sleep time: 30, unit: 'SECONDS'
                    
                    echo 'Проверка доступности фронта...'
                    sh '''
                        if ! curl -fsS ${FRONTEND_URL}; then
                            echo 'Фронт недоступен'
                            exit 1
                        fi
                    '''
                    
                    echo 'Получение ID контейнера базы данных...'
                    def dbContainerID = sh(
                        script: "docker ps --filter name=${SWARM_STACK_NAME}_${DB_SERVICE} --format '{{.ID}}'",
                        returnStdout: true
                    ).trim()
                    
                    if (!dbContainerID) {
                        error("Контейнер базы данных не найден")
                    }
                    
                    echo 'Подключение к MySQL и проверка таблиц...'
                    sh """
                         docker exec ${dbContainerID} mysql -u ${DB_USER} -p${DB_PASSWORD} -e 'USE ${DB_NAME};SHOW TABLES;'
                       """					
                }
            }
        }

		stage('Import Dump to DB server') {
			steps {
				echo "Загружаем SQL из репозитория и создаём таблицы"
                sh """
                CONTAINER_ID=\$(docker ps -qf "name=${SWARM_STACK_NAME}_${DB_SERVICE}")
                docker exec -i \$CONTAINER_ID mysql -u${DB_USER} -p${DB_PASSWORD} ${DB_NAME} < dump/notepaddb.sql
                echo "SQL из файла загружен в MySQL"
                """
			}
		}
		
		stage('Check DB Columns') {
			steps {
				script {
					echo 'Проверка количества столбцов в таблице pages'
					sh """
					     docker exec ${dbContainerID} mysql -u ${DB_USER} -p${DB_PASSWORD} ${DB_NAME} -e "
                             SELECT COUNT(*) as column_count 
                             FROM information_schema.columns 
                             WHERE table_name = 'pages';
                        " > /tmp/column_count.txt
						
                         COLUMN_COUNT=\$(tail -1 /tmp/column_count.txt | tr -d '[:space:]')
                         
                         if [ "\${COLUMN_COUNT}" -eq 5 ]; then
                             echo "Таблица pages содержит 5 столбцов"
                         else
                             echo "Ошибка: В таблице users неверное количество столбцов!"
							 exit 1
						fi
						 
					   """
				}
			}
		}
		
    }

    post {
        success {
            echo 'Пайплайн выполнен успешно'
        }
        failure {
            echo 'Пайплайн завершился с ошибкой'
        }
        always {
            cleanWs()
        }
    }
}
