./primes < inputp.txt > outputp.txt
cmp templatep.txt outputp.txt
if [ $? -ne 0 ]; then
	exit 1
fi
exit 0
