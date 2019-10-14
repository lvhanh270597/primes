pipeline {
    agent any
    stages {
        stage('Compile') {
            steps {
                echo "Compiling..."
		g++ main.cpp -o main
            }
        }
	stage("Test function"){
	    steps {
		echo "Testing function..."
		sh ./test.sh
	    }
	}
    }
    post {
        always {
            junit 'build/reports/**/*.xml'
        }
    }
}
