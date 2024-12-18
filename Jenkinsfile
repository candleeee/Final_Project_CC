pipeline {
    agent {
        node {
            label "Linux && java11"
        }
    }
    stages {
        stage("Build") {
            steps {
                echo("Hello Build")
            }
        }
        stage("Test") {
            steps {
                echo("Hello Test")
            }
        }
        stage("Deploy") {
            steps {
                echo("Hello Deploy")
            }
        }
    }
}
