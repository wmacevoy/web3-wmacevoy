# web3-wmacevoy

## Apache2 - LAMP

```bash
sudo apt-get install lamp-server^`
```

Point to repo

(allow apache to read directories)

```bash
cd
chmod +x projects
chmod +x projects/web3-wmacevoy
chmod +x projects/web3-wmacevoy/docs
```

Added

```
<Directory /home/user/projects/web3-wmacevoy/docs/>
	Options Indexes FollowSymLinks
	AllowOverride None
	Require all granted
</Directory>
```

to `/etc/apache2/apache2.conf`

Changed `DocumentRoot` in /etc/apache2/sites-available/000-default.conf to

```
DocumentRoot /home/user/projects/web3-wmacevoy/docs
```


Restart with

```bash
sudo apachectl restart
```
