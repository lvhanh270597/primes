#include <iostream>
#include "snt.h"
using namespace std;

int n;
int main(){
	cin>>n;
	for (int i=1; i<=n; i++){
		int x;
		cin>>x;
		cout<<(snt(x));
	}
	return 0;
}
