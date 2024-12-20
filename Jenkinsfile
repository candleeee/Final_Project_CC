pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                script {
                    echo 'Cloning repository...'
                    // Simulasi cloning repository
                    echo 'Repository cloned successfully.'
                }
            }
        }
        stage('Run Tests') {
            steps {
                script {
                    echo 'Running tests...'
                    // Simulasi menjalankan testing
                    echo 'All tests passed successfully.'
                }
            }
        }
        stage('Deploy') {
            steps {
                script {
                    echo 'Deploying application...'
                    // Simulasi proses deploy
                    echo 'Application deployed successfully.'
                }
            }
        }
    }
    post {
        success {
            echo 'Pipeline completed successfully!'
        }
        failure {
            echo 'Pipeline failed. Please check the logs for more details.'
        }
    }
}
