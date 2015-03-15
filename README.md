ILG

1. Create Database/Schema named `ilg`
2. Import .sql.gz file located in the DATABASE directory
3. In C:\xampp\htdocs\ run `git clone https://github.com/lukewatts/ilg.git ilg`
4. Open wp-config.php and Database credentials if needed.
5. Setup Virtual Host as follows:
1. Open `C:\xampp\apache\conf\extra\httpd-vhosts.conf` and add:
```
# Preserves localhost and 127.0.0.1 URIs
<VirtualHost 127.0.0.1:80>
    DocumentRoot "C:/xampp/htdocs/"
    ServerName localhost
    ServerAlias locahost
</VirtualHost>

# ILG
<VirtualHost ilg.dev>
  ServerAdmin ilg.dev
  DocumentRoot "C:/xampp/htdocs/ilg"
  ServerName ilg.dev
  ServerAlias ilg.dev
</VirtualHost>
```

to the end of the file. Save and close.

2. Open `C:\Windows\System32\Drivers\etc\hosts` file and add `127.0.0.1  ilg.dev` to the end of the file. Save and close.

6. Stop Apache and Start Apache again (you must restart Apache if it was already running for vHOSTS Aliases to take effect).
7. Navigate to http://ilg.dev in browser.

Should work if the paths, urls and DB credentials are correct
 