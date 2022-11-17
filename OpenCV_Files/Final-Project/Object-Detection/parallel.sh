#!/bin/bash

while true; do

for i in {1..10}
do
python3 ultrasonic_distance.py


python3 test_not_altered.py


done


read -rsn1 input


if [ "$input" = "a" ]; then

	break
fi

done







