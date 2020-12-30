pipeline {
  agent any
  stages {
    stage('Validation') {
      parallel {
        stage('Validation') {
          steps {
            echo 'Hello'
            sh '''docker-compose config
'''
            sleep 2
          }
        }

        stage('') {
          steps {
            sleep 6
          }
        }

      }
    }

    stage('After parallel') {
      steps {
        echo 'Done'
      }
    }

    stage('Build') {
      steps {
        sh 'docker-compose build --pull'
      }
    }

    stage('Unit Tests') {
      steps {
        sh 'docker-compose -f docker-compose.yml run --rm php-fpm bin/phpunit'
      }
    }
  }
}