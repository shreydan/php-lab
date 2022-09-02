# PHP LAB

for the sake of college, semester 4.

## How to run:

```
START:

sudo /opt/lampp/lampp start

STOP:

sudo /opt/lampp/lampp stop
```

OPEN `localhost/php-lab/expN` to run

By default on Linux, `htdocs` folder is not writeable. Give permissions safely with:

RUN `whoami` and replace `user` in the next command:

```
sudo chown -R user:user /opt/lampp/htdocs
```

### Uninstalling after semester ends coz I don't want XAMPP:

```
cd /opt/lampp
sudo ./uninstall
sudo rm -r /opt/lampp
```

## Experiments:

![experiments](./php-lab-exp.png)
