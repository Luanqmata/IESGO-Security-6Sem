
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
