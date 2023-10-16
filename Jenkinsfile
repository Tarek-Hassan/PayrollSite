pipeline {
    agent {
        label 'Test'
    }
    environment {
        GIT_CREDENTIALS = credentials('github')
    }
    stages {
        stage('Clone repository') {
            steps {
                // Clone the repository to a local directory
                git branch: 'main', url: 'git@github.com:Tarek-Hassan/FIrstWebSite.git'
            }
        }
    }
        stage('Git Clone') {
            steps {
                sshagent(['vm1']) {
                    sh "ssh ma7ma@172.30.180.91 'git clone https://github.com/Tarek-Hassan/FIrstWebSite.git ~/home'"
            }
        }
    }
        stage("dm") {
            steps {
                sshagent(['ubuntu']) {
                    sh "scp -o StrictHostKeyChecking=no ansible/* ma7ma@172.20.142.8:/root"
                    
                    withCredentials([sshUserPrivateKey(credentialsId: 'vm1', keyFileVariable: 'keyfile')]) {
                        sh 'scp $keyfile ma7ma@172.20.142.8:/ma7ma/ssh-key.pem'
        }
            }
                }
                    }
        stage ("execute ansible playbook on Test") {
            steps {
                script{
                    def remote = [:]
                    remote.name = "ubuntu"
                    remote.host = "172.20.142.8"
                    remote.allowAnyHosts = true
                    withCredentialswithCredentials([sshUserPrivateKey(credentialsId: 'ubuntu', keyFileVariable: 'keyfile')]){
                        remote.user = 'ma7ma'
                        remote.identityFile = keyfile
                        sshCommand remote: remote, command: "ansible-playbook my-playbook.yaml"
                }               
            }
        }
    }
        stage('User input') {
            steps {
                // Prompt the user for input
                input message: 'Do you want to execute the Repo?', ok: 'Yes', parameters: [
                    string(defaultValue: 'dev', description: 'Enter the environment', name: 'env')
                ]
            }
        }
        stage ("execute ansible playbook on Prod") {
            agent {
                label 'stage'
            }
            steps {
                script{
                    def remote = [:]
                    remote.name = "ubuntu"
                    remote.host = "172.20.142.8"
                    remote.allowAnyHosts = true
                    withCredentialswithCredentials([sshUserPrivateKey(credentialsId: 'ubuntu', keyFileVariable: 'keyfile')]){
                        remote.user = 'ma7ma'
                        remote.identityFile = keyfile
                        sshCommand remote: remote, command: "ansible-playbook my-playbook.yaml"
                }               
            }
        }
    }
    stage('User input') {
            steps {
                // Prompt the user for input
                input message: 'Do you want to execute the Repo?', ok: 'Yes', parameters: [
                    string(defaultValue: 'dev', description: 'Enter the environment', name: 'env')
                ]
            }
        }
        stage ("execute ansible playbook on Prod") {
            agent {
                label 'Prod'
            }
            steps {
                script{
                    def remote = [:]
                    remote.name = "ubuntu"
                    remote.host = "172.20.142.8"
                    remote.allowAnyHosts = true
                    withCredentialswithCredentials([sshUserPrivateKey(credentialsId: 'ubuntu', keyFileVariable: 'keyfile')]){
                        remote.user = 'ma7ma'
                        remote.identityFile = keyfile
                        sshCommand remote: remote, command: "ansible-playbook my-playbook.yaml"
                }               
            }
        }
    }
}

