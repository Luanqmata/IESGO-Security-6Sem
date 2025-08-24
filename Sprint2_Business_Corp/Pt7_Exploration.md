# 🔍 Exploração do Site — 👨‍🔬 Penetratium ☢️ - 🧬 Team 📡

## 🔗 Materia Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress
- 🔍 **Tipo:** Exploration

---

## Comando : cat /etc/passwd
```ruby
Todos os outros são contas de sistema ou de serviço e não possuem login interativo.
  root:x:0:0:root:/root:/bin/bash
  business:x:1000:1000:business,,,:/home/business:/bin/bash
```

## comando : ps aux

``` ruby
  USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
  root         1  0.0  0.8  33480  4048 ?        Ss   06:28   0:01 /sbin/init
  root       245  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root       270  0.0  0.0      0     0 ?        S    06:28   0:01 [jbd2/sda1-8]
  root       271  0.0  0.0      0     0 ?        S<   06:28   0:00 [ext4-rsv-conver]
  root       315  0.0  0.0      0     0 ?        S<   06:28   0:00 [kworker/0:1H]
  root       410  0.0  0.5  20284  2848 ?        S    06:28   0:00 upstart-udev-bridge --daemon
  root       416  0.0  0.8  52296  4216 ?        Ss   06:28   0:00 /lib/systemd/systemd-udevd --daemon
  root       480  0.0  0.0      0     0 ?        S<   06:28   0:00 [ttm_swap]
  message+   507  0.0  0.4  39116  2124 ?        Ss   06:28   0:00 dbus-daemon --system --fork
  root       583  0.0  0.6  43452  3324 ?        Ss   06:28   0:00 /lib/systemd/systemd-logind
  syslog     668  0.0  0.5 255844  2984 ?        Ssl  06:28   0:00 rsyslogd
  root       805  0.0  0.4  16072  2340 ?        S    06:28   0:00 upstart-file-bridge --daemon
  root       813  0.0  0.3  15528  1840 ?        S    06:28   0:00 upstart-socket-bridge --daemon
  root       939  0.0  0.4  15820  2068 tty4     Ss+  06:28   0:00 /sbin/getty -8 38400 tty4
  root       942  0.0  0.3  15820  1992 tty5     Ss+  06:28   0:00 /sbin/getty -8 38400 tty5
  root       947  0.0  0.4  15820  2008 tty2     Ss+  06:28   0:00 /sbin/getty -8 38400 tty2
  root       948  0.0  0.4  15820  2036 tty3     Ss+  06:28   0:00 /sbin/getty -8 38400 tty3
  root       951  0.0  0.3  15820  1976 tty6     Ss+  06:28   0:00 /sbin/getty -8 38400 tty6
  root       985  0.0  1.0  61380  5268 ?        Ss   06:28   0:00 /usr/sbin/sshd -D
  daemon     988  0.0  0.0  19140   160 ?        Ss   06:28   0:00 atd
  root       989  0.0  0.4  23656  2320 ?        Ss   06:28   0:00 cron
  root      1155  0.0  0.3   4372  1624 ?        Ss   06:28   0:00 acpid -c /etc/acpi/events -s /var/run/acpid.socket
  mysql     1162  0.0  9.5 887444 47736 ?        Ssl  06:28   0:05 /usr/sbin/mysqld
  root      1194  0.0  4.3 278588 21940 ?        Ss   06:28   0:01 /usr/sbin/apache2 -k start
  root      1242  0.0  0.7  78188  3572 tty1     Ss   06:28   0:00 /bin/login --     
  root      1346  0.0  0.0      0     0 ?        S    06:33   0:00 [kauditd]
  root      1394  0.0  1.0  22360  5100 tty1     S+   06:33   0:00 -bash
  root      1888  0.0  0.0      0     0 ?        S    09:20   0:00 [kworker/u2:2]
  www-data  3258  0.0  2.6 278876 13404 ?        S    10:40   0:00 /usr/sbin/apache2 -k start
  www-data  3261  0.0  2.6 278868 13244 ?        S    10:40   0:00 /usr/sbin/apache2 -k start
  www-data  3264  0.0  2.6 279068 13488 ?        S    10:41   0:00 /usr/sbin/apache2 -k start
  www-data  3272  0.0  2.6 278876 13244 ?        S    10:41   0:00 /usr/sbin/apache2 -k start
  www-data  3274  0.0  2.6 278876 13180 ?        S    10:41   0:00 /usr/sbin/apache2 -k start
  www-data  3276  0.0  2.7 279060 13580 ?        S    10:41   0:00 /usr/sbin/apache2 -k start
  www-data  3278  0.0  2.6 279068 13264 ?        S    10:42   0:00 /usr/sbin/apache2 -k start
  www-data  3279  0.0  2.6 278868 13332 ?        S    10:42   0:00 /usr/sbin/apache2 -k start
  www-data  3280  0.0  2.6 279060 13360 ?        S    10:42   0:00 /usr/sbin/apache2 -k start
  www-data  3281  0.0  2.6 279068 13508 ?        S    10:42   0:00 /usr/sbin/apache2 -k start
  root      3302  0.0  0.0      0     0 ?        S    10:52   0:00 [kworker/u2:1]
  www-data  3330  0.0  0.1   4448   796 ?        S    11:07   0:00 sh -c ps aux
  www-data  3331  0.0  0.4  15568  2204 ?        R    11:07   0:00 ps aux
  ```

## comando : netstat -tulpn
```ruby
  Active Internet connections (only servers)
  Proto Recv-Q Send-Q Local Address           Foreign Address         State       PID/Program name
  tcp        0      0 127.0.0.1:22            0.0.0.0:*               LISTEN      -               
  tcp        0      0 127.0.0.1:3306          0.0.0.0:*               LISTEN      -               
  tcp6       0      0 :::80                   :::*                    LISTEN      -               
```

## comando : mysql -u root -pdbhacklfi -e "use mysql; select user, host, password from user;"
```ruby
  user	host	password
  root	localhost	*19CFDF5B8F5E1CA15B1222BA0C4363437F641E11
  root	rh	*19CFDF5B8F5E1CA15B1222BA0C4363437F641E11
  root	127.0.0.1	*19CFDF5B8F5E1CA15B1222BA0C4363437F641E11
  root	::1	*19CFDF5B8F5E1CA15B1222BA0C4363437F641E11
  debian-sys-maint	localhost	*300DD417C72920F12EBD3A01236771655230AC5A
```
## comando : cat /var/www/html/prog/db.php
```ruby
  <!--?php
  
      $lnk = @mysql_connect("localhost", "root", "dbhacklfi");
      $db = mysql_select_db('deseclfi', $lnk);
  
  ?--> 

```
# CREDENCIAIS DO BANCO DE DADOS encontradas ( ROOT ) do mysql

## comando : cat /var/www/html/BANCO\ DE\ DADOS/bd.sql
```ruby
  -- MySQL dump 10.13  Distrib 5.1.63, for debian-linux-gnu (i486)
  --
  -- Host: localhost    Database: cfp
  -- ------------------------------------------------------
  -- Server version	5.1.63-0+squeeze1
  
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8 */;
  /*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
  /*!40103 SET TIME_ZONE='+00:00' */;
  /*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
  /*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
  /*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
  /*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
  
  --
  -- Table structure for table `submissions`
  --
  
  DROP TABLE IF EXISTS `submissions`;
  /*!40101 SET @saved_cs_client     = @@character_set_client */;
  /*!40101 SET character_set_client = utf8 */;
  CREATE TABLE `submissions` (
    `id` mediumint(9) NOT NULL AUTO_INCREMENT,
    `email` varchar(150) DEFAULT NULL,
    `password` varchar(50) DEFAULT NULL,
    `title` varchar(150) DEFAULT NULL,
    `description` text,
    `bio` text,
    `filename` varchar(150) DEFAULT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  /*!40101 SET character_set_client = @saved_cs_client */;
  
  --
  -- Dumping data for table `submissions`
  --
  
  LOCK TABLES `submissions` WRITE;
  /*!40000 ALTER TABLE `submissions` DISABLE KEYS */;
  /*!40000 ALTER TABLE `submissions` ENABLE KEYS */;
  UNLOCK TABLES;
  /*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
  
  /*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
  /*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
  /*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
  /*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
  
  -- Dump completed on 2017-01-09 23:37:44
```
## comando : find /var/www/html -name "*.php" -exec grep -l "mysql_connect\|password\|user" {} \;

```ruby
  /var/www/html/prog/submission.php
  /var/www/html/prog/auth.php
  /var/www/html/prog/db.php
  /var/www/html/submit.php
  /var/www/html/login.php
```

## comando : grep -r "password\|user\|mysql" /var/www/html --include="*.php"

<img width="886" height="701" alt="image" src="https://github.com/user-attachments/assets/1fab406b-967f-459d-b9e1-78572f951425" />

---

## comando :grep -n "mysql_connect\|password\|user" /var/www/html/prog/submission.php

```ruby
  4:  public $id, $title, $email, $password, $description, $bio, $filename, $admin;
  5:  function __construct($id, $title, $email, $password, $description, $bio, $filename ){
  9:    $this->password = $password;
  18:                          $row['password'], $row['description'],
  24:      $sql .= "' and password='";
  25:      $sql .= mysql_real_escape_string( $_POST["password"]);
  121:      $sql = "INSERT INTO submisn/bash\ndaemon:x:1:1:daemon:/usrsions (email,password,";
  127:      $password = mysql_real_escape_string( $_POST["password"]);
  132:      $sql .= $email."','".$password."','".$title."','".$description."','";
```

## comando : ls -la /var/www/html/prog/

```ruby
    total 28
    drwxr-xr-x  2 www-data www-data 4096 Sep 18 11:30 .
    drwxr-xr-x 12 www-data www-data 4096 Sep 19 10:58 ..
    -rw-r--r--  1 www-data www-data  391 Sep 18 11:03 auth.php
    -rw-r--r--  1 www-data www-data  117 Sep 18 11:30 db.php
    -rw-r--r--  1 www-data www-data   69 Sep 18 11:03 php.php
    -rw-r--r--  1 www-data www-data 4194 Sep 18 11:03 submission.php
```
## comando : mysql --version

```ruby
mysql  Ver 14.14 Distrib 5.5.50, for debian-linux-gnu (x86_64) using readline 6.3
```

## comando : mysql -u root -pdbhacklfi -e "show databases;"

```ruby
  Database
  information_schema
  deseclfi
  mysql
  performance_schema
```

## comando : mysql -u root -pdbhacklfi -e "use deseclfi; show tables;"

```ruby
  Tables_in_deseclfi
  submissions
```
## comando: mysql -u root -pdbhacklfi -e "use mysql; show tables;"

```ruby
  Tables_in_mysql
  columns_priv
  db
  event
  func
  general_log
  help_category
  help_keyword
  help_relation
  help_topic
  host
  ndb_binlog_index
  plugin
  proc
  procs_priv
  proxies_priv
  servers
  slow_log
  tables_priv
  time_zone
  time_zone_leap_second
  time_zone_name
  time_zone_transition
  time_zone_transition_type
  user

```
## comando : ls -la /home/business
```ruby
    total 44
    drwxr-xr-x 3 business business 4096 Sep 18 23:10 .
    drwxr-xr-x 3 root     root     4096 Sep 16 18:37 ..
    -rw------- 1 business business  280 Sep 18 15:26 .bash_history
    -rw-r--r-- 1 business business  220 Sep 16 18:37 .bash_logout
    -rw-r--r-- 1 business business 3637 Sep 16 18:37 .bashrc
    drwx------ 2 business business 4096 Sep 16 18:39 .cache
    -rw-r--r-- 1 root     root       76 Sep 18 23:10 .dados
    -rw------- 1 business business   97 Sep 18 11:32 .mysql_history
    -rw-r--r-- 1 business business  675 Sep 16 18:37 .profile
    -rw------- 1 business business 5099 Sep 18 14:27 .viminfo
```

PAREI AQUI ----
## comando : cat /etc/crontab
```ruby
  # /etc/crontab: system-wide crontab
  # Unlike any other crontab you don't have to run the `crontab'
  # command to install the new version when you edit this file
  # and files in /etc/cron.d. These files also have username fields,
  # that none of the other crontabs do.
  
  SHELL=/bin/sh
  PATH=/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin
  
  # m h dom mon dow user	command
  17 *	* * *	root    cd / && run-parts --report /etc/cron.hourly
  25 6	* * *	root	test -x /usr/sbin/anacron || ( cd / && run-parts --report /etc/cron.daily )
  47 6	* * 7	root	test -x /usr/sbin/anacron || ( cd / && run-parts --report /etc/cron.weekly )
  52 6	1 * *	root	test -x /usr/sbin/anacron || ( cd / && run-parts --report /etc/cron.monthly )
```
## comando : ls -la /etc/cron.d/
```ruby
  total 16
  drwxr-xr-x  2 root root 4096 Sep 16 19:11 .
  drwxr-xr-x 93 root root 4096 Sep 19 06:28 ..
  -rw-r--r--  1 root root  102 Feb  9  2013 .placeholder
  -rw-r--r--  1 root root  510 Jul 28  2016 php5
```
## comando : ls -la /etc/cron.daily/
```ruby
  drwxr-xr-x  2 root root  4096 Sep 16 18:36 .
  drwxr-xr-x 93 root root  4096 Sep 19 06:28 ..
  -rw-r--r--  1 root root   102 Feb  9  2013 .placeholder
  -rwxr-xr-x  1 root root   625 Jul 15  2016 apache2
  -rwxr-xr-x  1 root root   376 Apr  4  2014 apport
  -rwxr-xr-x  1 root root 15481 Apr 10  2014 apt
  -rwxr-xr-x  1 root root   314 Feb 17  2014 aptitude
  -rwxr-xr-x  1 root root   355 Jun  4  2013 bsdmainutils
  -rwxr-xr-x  1 root root   256 Mar  7  2014 dpkg
  -rwxr-xr-x  1 root root   372 Jan 22  2014 logrotate
  -rwxr-xr-x  1 root root  1261 Sep 23  2014 man-db
  -rwxr-xr-x  1 root root   435 Jun 20  2013 mlocate
  -rwxr-xr-x  1 root root   249 Feb 16  2014 passwd
  -rwxr-xr-x  1 root root  2417 May 13  2013 popularity-contest
  -rwxr-xr-x  1 root root   214 Oct  6  2014 update-notifier-common
  -rwxr-xr-x  1 root root   328 Jul 18  2014 upstart
```
## ls -la /etc/cron.weekly/
```ruby
total 28
  drwxr-xr-x  2 root root 4096 Sep 16 18:35 .
  drwxr-xr-x 93 root root 4096 Sep 19 06:28 ..
  -rw-r--r--  1 root root  102 Feb  9  2013 .placeholder
  -rwxr-xr-x  1 root root  730 Feb 23  2014 apt-xapian-index
  -rwxr-xr-x  1 root root  427 Apr 16  2014 fstrim
  -rwxr-xr-x  1 root root  771 Sep 23  2014 man-db
  -rwxr-xr-x  1 root root  211 Oct  6  2014 update-notifier-common
```
## ps aux | grep cron
```ruby
  root       989  0.0  0.4  23656  2320 ?        Ss   06:28   0:00 cron
  www-data  4399  0.0  0.1   4448   796 ?        S    13:02   0:00 sh -c ps aux | grep cron
  www-data  4401  0.0  0.1   8872   804 ?        S    13:02   0:00 grep cron
```

