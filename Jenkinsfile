pipeline {
    agent any
    environment {
        // Vinculamos la credencial secreta que crearemos luego en la web de Jenkins
        ROOT_PASSWORD = credentials('mariadb-secret-pwd')
    }
    stages {
        stage('Limpieza') {
            steps {
                // Detiene contenedores huérfanos previos antes de actualizar
                sh 'docker compose down --remove-orphans'
            }
        }
        stage('Despliegue seguro') {
            steps {
                // Levanta los contenedores forzando la compilación del Dockerfile
                sh 'docker compose up --build -d'
            }
        }
    }
}