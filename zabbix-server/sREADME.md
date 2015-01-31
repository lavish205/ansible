# ansible
* ansible for zabbix-server used to monitor other linux machines.
* To use it for installing on your monitoring server, edit hosts file and change IP with your mointoring server IP.
* By default username and password of mysql will be 'zabbix' and 'password' respectively.
* You can change this values by editing file `all.yml` present in `group_vars` folder.
* After completing the installation navigate to your [http://xxx.xxx.xxx.xxx/zabbix](http://xxx.xxx.xxx.xxx/zabbix), 
bydefault username and passord are 'Admin' and 'zabbix' respectively. (xxx.xxx.xxx.xxx is your monitoring server ip)
