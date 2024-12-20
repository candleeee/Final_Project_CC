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
        sh 'ansible-galaxy install -r requirements.yml'
    }
}
stage('Run Ansible Playbook') {
    steps {
        sh 'ansible-playbook playbooks/mariadb.yml -i hosts'
    }
}

}
