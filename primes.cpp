#include <iostream>
#include "snt.h"
using namespace std;


int n;
int main(){
	cin>>n;
	for (int i=2; i<=n; i++){
		if (snt(i)){
			cout<<i<<endl;
		}
	}
	return 0;
}
