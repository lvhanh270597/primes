pipeline {
    agent any
    stages {
        stage('Compile') {
            steps {
                echo "Compiling..."
		sh 'g++ main.cpp -o main'
            }
        }
	stage('TestF') {
	    steps {
		echo "Testing function..."
		sh './test.sh'
	    }
	}
    }
}
