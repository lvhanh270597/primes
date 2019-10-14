pipeline {
    agent any
    stages {
        stage('CompileF') {
            steps {
                echo "Compiling..."
		sh 'g++ main.cpp -o main'
            }
        }
	stage('TestF') {
	    steps {
		echo "Testing function..."
		sh './testf.sh'
	    }
	}
	stage('CompileP') {
	    steps {
		echo "Compiling code..."
		sh 'g++ primes.cpp -o primes'
	    }
	}
	stage('TestP') {
	    steps {
		echo "Testing primes..."
		sh './testp.sh'
	    }
	}
    }
}
