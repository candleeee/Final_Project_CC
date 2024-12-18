pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                git 'https://github.com/candleeee/Final_Project_CC.git'
            }
        }
        stage('Install Dependencies') {
            steps {
                bat 'ansible-galaxy install -r requirements.yml'
            }
        }
        stage('Run Ansible Playbook') {
            steps {
                bat 'ansible-playbook playbooks/mariadb.yml -i hosts'
            }
        }
    }
}
