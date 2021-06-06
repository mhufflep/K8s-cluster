tar xf telegraf-1.18.1_linux_amd64.tar.gz
rm -rf telegraf-1.18.1_linux_amd64.tar.gz
cp -r ./telegraf-1.18.1/* /

./usr/bin/telegraf -sample-config --input-filter docker --output-filter influxdb > etc/telegraf/telegraf.conf