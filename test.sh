./main < input.txt > output.txt
cmp template.txt output.txt
if [ $? -ne 0 ]; then
	exit 1
fi
exit 0
