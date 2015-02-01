# ansible
* Ansible for both `zabbix-server` and `zabbix-agent`.

* Zabbix is a networked server and software monitor. It can be used to keep track of multiple physical or virtual private server instances.

* The client-server model that Zabbix employs allows the cloud server to collect rich sets of data that be used to graph historical trends. This can be very useful for monitoring the performance of the websites and applications hosted on your VPS.

For this, we will configure two machines. One will be configured as the server i.e. **zabbix-server** , and the other as a client i.e. **zabbix-agent**.

* ansible for zabbix-server used to monitor other linux machines.

* For installing, edit hosts file and replace `[zabbix-server]` IP(s) with your monitoring server IP(s) and replace `[zabbix-agent]` IP(s) with your server IP(s) which you want to monitor.

* By default  **username and password of mysql will be 'zabbix' and 'password' respectively**.

* You can change this values by editing file `all.yml` present in `group_vars` folder.

* After completing the installation navigate to your [http://xxx.xxx.xxx.xxx/zabbix](http://xxx.xxx.xxx.xxx/zabbix), 
bydefault **username and passord for login portal are 'Admin' and 'zabbix' respectively**. (xxx.xxx.xxx.xxx is your monitoring server ip)
