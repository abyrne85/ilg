ILG

1. Create Database/Schema named __ilg__
2. Import _*.sql.gz_ file located in the DB directory
3. In __C:/xampp/htdocs/__ run `git clone https://github.com/lukewatts/ilg.git ilg`
4. Open _wp-config.php_. Should only need to add DB_PASSWORD if you use a password. The rest should be correct.
5. Setup Virtual Host as follows:
1. Open __C:/xampp/apache/conf/extra/httpd-vhosts.conf__ and add:
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

2. Open __C:/Windows/System32/Drivers/etc/hosts__ file and add `127.0.0.1  ilg.dev` to the end of the file. Save and close.

6. Stop Apache and Start Apache again (you must restart Apache if it was already running for vHOSTS Aliases to take effect).
7. Navigate to `http://ilg.dev` in browser. Should work if the paths, urls and DB credentials are correct
