# PHP LAB

for the sake of college, semester 4.

## How to run:

START:

```
sudo /opt/lampp/lampp start
```

STOP:

```
sudo /opt/lampp/lampp stop
```

- Clone repo to `htdocs` folder.
- OPEN `localhost/php-lab/exp$n` to run

By default on Linux, `htdocs` folder is not writeable. Give permissions safely with:

RUN `whoami` and replace `user` in the next command:

```
sudo chown -R user:user /opt/lampp/htdocs
```

#### Online Compiler:

some stuff doesn't work on XAMPP, e.g. `readline()`, so find alternatives to do it via XAMPP. Best online compiler: [good compiler <3](https://www.tutorialspoint.com/execute_php_online.php)

### Uninstalling after semester ends coz I don't want XAMPP:

```
cd /opt/lampp
sudo ./uninstall
sudo rm -r /opt/lampp
```

## Experiments:

![experiments](./php-lab-exp.png)

## Programs I wrote in file:

- Create a PHP webpage and print “hello world”
- Write a PHP program to find maximum of three numbers.
- Write a function calculate_Average () which takes four arguments which are marks for four courses in the semester and returns their average.
- Write a PHP program Create a switch statement that will output Hello if $var is 1 and Welcome if $var is 2.
- Write a PHP program to compute factorial of a number using While
- Write a PHP program to compute factorial of a number using recursion.
- Create an associative array using the countries as keys, the cities as values and display the data as a table.
- Create pages for signup and sign-in process using PHP & MySQL database operations
- Write a php program to demonstrate Login Panel by session creation, checking and deletion
- Write a program to enter TWO numbers and print the Swap Numbers using PHP Example.
