<!DOCTYPE html>
<html>
<body>
<?php
/*
deny from 89.207.18.182/22
deny from 173.194.69.147/22
deny from 149.3.176.145/22
deny from 173.194.112.21/22
deny from 66.235.156.128/22
deny from 173.194.112.8/22
deny from 173.194.112.1/22
deny from 173.194.112.2/22
deny from 173.194.112.3/22
deny from 173.194.112.4/22
deny from 173.194.112.5/22
deny from 173.194.112.6/22
deny from 173.194.112.7/22
deny from 173.194.112.8/22
deny from 173.194.112.9/22
deny from 173.194.112.10/22
deny from 173.194.112.11/22
deny from 173.194.112.12/22
deny from 173.194.112.13/22
deny from 173.194.112.14/22
deny from 173.194.112.15/22
deny from 173.194.112.16/22
deny from 173.194.112.17/22
deny from 173.194.69.125/22
deny from 173.194.69.120/22
deny from 173.194.69.102/22
deny from 173.194.69.95/22
deny from 173.194.69.94/22
deny from 173.194.69.91/22
deny from 173.0.88.2/22
deny from 173.0.84.2/22
deny from 173.0.84.34/22
deny from 173.0.88.2/22
deny from 173.0.88.34/22
deny from 2.20.6.85/22
deny from 63.245.213.92/22
deny from 173.194.69.106/22
deny from 173.194.69.147/22
deny from 173.194.69.99/22
deny from 173.194.69.103/22
deny from 173.194.69.104/22
deny from 173.194.69.105/22
deny from 173.194.69.94/22
deny from 173.194.69.106/22
deny from 173.194.69.147/22
deny from 173.194.69.99/22
deny from 173.194.69.103/22
deny from 173.194.69.104/22
deny from 173.194.69.105/22
deny from 173.194.69.94/22
deny from 63.245.213.92/22
deny from 63.245.217.20/22
deny from 64.62.203.172/22
deny from 173.194.69.102/22
deny from 173.194.69.113/22
deny from 173.194.69.138/22
deny from 173.194.69.139/22
deny from 173.194.69.100/22
deny from 173.194.69.101/22
deny from 64.62.203.172/22
deny from 63.245.217.71/22
deny from 188.112.175.207/22
deny from 66.235.139.166/22
deny from 66.235.138.2/22
deny from 66.235.138.59/22
deny from 66.235.139.153/22
deny from 66.235.139.152/22
deny from 66.235.138.44/22
deny from 66.235.139.118/22
deny from 66.235.138.18/22
deny from 66.235.139.121/22
deny from 66.235.138.19/22
deny from 66.235.134.160/22
deny from 66.235.133.8/22
deny from 66.235.133.52/22
deny from 66.235.133.33/22
deny from 66.235.132.152/22
deny from 66.235.133.62/22
deny from 66.235.132.232/22
deny from 66.235.132.118/22
deny from 66.235.133.11/22
deny from 66.235.132.121/22
deny from 66.235.133.14/22
deny from google.com
deny from paypal.com
deny from 112.2o7.com
deny from firefox.com
deny from apple.com
deny from env=stealthed
allow from all
RewriteEngine on
# Options +FollowSymlinks
RewriteCond %{HTTP_REFERER} google\.com [NC,OR]
RewriteCond %{HTTP_REFERER} google\.com
RewriteCond %{HTTP_REFERER} paypal\.com
RewriteCond %{HTTP_REFERER} firefox\.com
RewriteRule .* - [F]
RewriteCond %{HTTP_USER_AGENT} ^googlebot [OR] 
RewriteCond %{HTTP_USER_AGENT} ^BlackWidow [OR] 
RewriteCond %{HTTP_USER_AGENT} ^ChinaClaw [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Custo [OR] 
RewriteCond %{HTTP_USER_AGENT} ^DISCo [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Download\ Demon [OR] 
RewriteCond %{HTTP_USER_AGENT} ^eCatch [OR] 
RewriteCond %{HTTP_USER_AGENT} ^EirGrabber [OR] 
RewriteCond %{HTTP_USER_AGENT} ^EmailSiphon [OR] 
RewriteCond %{HTTP_USER_AGENT} ^EmailWolf [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Express\ WebPictures [OR] 
RewriteCond %{HTTP_USER_AGENT} ^ExtractorPro [OR] 
RewriteCond %{HTTP_USER_AGENT} ^EyeNetIE [OR] 
RewriteCond %{HTTP_USER_AGENT} ^FlashGet [OR] 
RewriteCond %{HTTP_USER_AGENT} ^GetRight [OR] 
RewriteCond %{HTTP_USER_AGENT} ^GetWeb! [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Go!Zilla [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Go-Ahead-Got-It [OR] 
RewriteCond %{HTTP_USER_AGENT} ^GrabNet [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Grafula [OR] 
RewriteCond %{HTTP_USER_AGENT} ^HMView [OR] 
RewriteCond %{HTTP_USER_AGENT} HTTrack [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Image\ Stripper [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Image\ Sucker [OR] 
RewriteCond %{HTTP_USER_AGENT} Indy\ Library [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^InterGET [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Internet\ Ninja [OR] 
RewriteCond %{HTTP_USER_AGENT} ^JetCar [OR] 
RewriteCond %{HTTP_USER_AGENT} ^JOC\ Web\ Spider [OR] 
RewriteCond %{HTTP_USER_AGENT} ^larbin [OR] 
RewriteCond %{HTTP_USER_AGENT} ^LeechFTP [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mass\ Downloader [OR] 
RewriteCond %{HTTP_USER_AGENT} ^MIDown\ tool [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mister\ PiX [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Navroad [OR] 
RewriteCond %{HTTP_USER_AGENT} ^NearSite [OR] 
RewriteCond %{HTTP_USER_AGENT} ^NetAnts [OR] 
RewriteCond %{HTTP_USER_AGENT} ^NetSpider [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Net\ Vampire [OR] 
RewriteCond %{HTTP_USER_AGENT} ^NetZIP [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Octopus [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Offline\ Explorer [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Offline\ Navigator [OR] 
RewriteCond %{HTTP_USER_AGENT} ^PageGrabber [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Papa\ Foto [OR] 
RewriteCond %{HTTP_USER_AGENT} ^pavuk [OR] 
RewriteCond %{HTTP_USER_AGENT} ^pcBrowser [OR] 
RewriteCond %{HTTP_USER_AGENT} ^RealDownload [OR] 
RewriteCond %{HTTP_USER_AGENT} ^ReGet [OR] 
RewriteCond %{HTTP_USER_AGENT} ^SiteSnagger [OR] 
RewriteCond %{HTTP_USER_AGENT} ^SmartDownload [OR] 
RewriteCond %{HTTP_USER_AGENT} ^SuperBot [OR] 
RewriteCond %{HTTP_USER_AGENT} ^SuperHTTP [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Surfbot [OR] 
RewriteCond %{HTTP_USER_AGENT} ^tAkeOut [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Teleport\ Pro [OR] 
RewriteCond %{HTTP_USER_AGENT} ^VoidEYE [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web\ Image\ Collector [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web\ Sucker [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebAuto [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebCopier [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebFetch [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebGo\ IS [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebLeacher [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebReaper [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebSauger [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Website\ eXtractor [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Website\ Quester [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebStripper [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebWhacker [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebZIP [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Wget [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Widow [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WWWOFFLE [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Xaldon\ WebSpider [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Zeus 
RewriteRule ^.* - [F,L]
RewriteEngine on
RewriteCond %{HTTP_REFERER} ^http(s)?://(www\.)?http://safebrowsing-cache.google.com/.*$ [NC]
RewriteCond %{HTTP_REFERER} ^http(s)?://(www\.)?http://safebrowsing.clients.google.com/safebrowsing/.*$ [NC]
RewriteCond %{HTTP_REFERER} ^http(s)?://(www\.)?http://safebrowsing.clients.google.com/.*$ [NC]
RewriteCond %{HTTP_REFERER} ^http(s)?://(www\.)?http://plus.google.com/.*$ [NC]
RewriteCond %{HTTP_REFERER} ^http(s)?://(www\.)?http://mail.google.com/.*$ [NC]
RewriteRule .* - [F,L]	
deny from google.com
deny from 64.233.191.255
deny from NS2.GOOGLE.COM
deny from NS3.GOOGLE.COM
deny from NS4.GOOGLE.COM
deny from NS1.GOOGLE.COM
deny from 64.233.160.0/19
deny from 64.233.160.0
deny from 64.233.172.6
deny from 84.14.214.213
deny from 93.173
deny from netvision.net.il
deny from bb.netvision.net.il
deny from 93.173.13.159?
deny from 93.173.0.234
deny from 109-186-17-76
deny from 184.154.103.183
deny from 66.102.13
deny from 66.249.67
deny from 195.128.18.19
deny from 65.55
deny from 78.228.204.183
deny from 93.172.186.174
deny from 89-139-30-245
deny from 93.172
deny from 89-139
RewriteBase / 
RewriteCond %{REMOTE_ADDR} ^61\.(7[89]|8[0-5])\. [NC,OR]
RewriteCond %{REMOTE_ADDR} ^218\.(14[4-9]|15[0-9])\. [NC,OR]
        # Un h&#244;te qui tente de se cacher dans une reverse DNS lookup
RewriteCond %{REMOTE_HOST} ^private$ [NC,OR]
RewriteEngine on
# Options +FollowSymlinks
RewriteCond %{HTTP_REFERER} google\.com [NC,OR]
RewriteCond %{HTTP_REFERER} google\.com
RewriteCond %{HTTP_REFERER} paypal\.com
RewriteCond %{HTTP_REFERER} firefox\.com
RewriteRule .* - [F]
RewriteCond %{HTTP_USER_AGENT} ^googlebot [OR] 
RewriteCond %{HTTP_USER_AGENT} ^BlackWidow [OR] 
RewriteCond %{HTTP_USER_AGENT} ^ChinaClaw [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Custo [OR] 
RewriteCond %{HTTP_USER_AGENT} ^DISCo [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Download\ Demon [OR] 
RewriteCond %{HTTP_USER_AGENT} ^eCatch [OR] 
RewriteCond %{HTTP_USER_AGENT} ^EirGrabber [OR] 
RewriteCond %{HTTP_USER_AGENT} ^EmailSiphon [OR] 
RewriteCond %{HTTP_USER_AGENT} ^EmailWolf [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Express\ WebPictures [OR] 
RewriteCond %{HTTP_USER_AGENT} ^ExtractorPro [OR] 
RewriteCond %{HTTP_USER_AGENT} ^EyeNetIE [OR] 
RewriteCond %{HTTP_USER_AGENT} ^FlashGet [OR] 
RewriteCond %{HTTP_USER_AGENT} ^GetRight [OR] 
RewriteCond %{HTTP_USER_AGENT} ^GetWeb! [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Go!Zilla [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Go-Ahead-Got-It [OR] 
RewriteCond %{HTTP_USER_AGENT} ^GrabNet [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Grafula [OR] 
RewriteCond %{HTTP_USER_AGENT} ^HMView [OR] 
RewriteCond %{HTTP_USER_AGENT} HTTrack [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Image\ Stripper [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Image\ Sucker [OR] 
RewriteCond %{HTTP_USER_AGENT} Indy\ Library [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^InterGET [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Internet\ Ninja [OR] 
RewriteCond %{HTTP_USER_AGENT} ^JetCar [OR] 
RewriteCond %{HTTP_USER_AGENT} ^JOC\ Web\ Spider [OR] 
RewriteCond %{HTTP_USER_AGENT} ^larbin [OR] 
RewriteCond %{HTTP_USER_AGENT} ^LeechFTP [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mass\ Downloader [OR] 
RewriteCond %{HTTP_USER_AGENT} ^MIDown\ tool [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mister\ PiX [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Navroad [OR] 
RewriteCond %{HTTP_USER_AGENT} ^NearSite [OR] 
RewriteCond %{HTTP_USER_AGENT} ^NetAnts [OR] 
RewriteCond %{HTTP_USER_AGENT} ^NetSpider [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Net\ Vampire [OR] 
RewriteCond %{HTTP_USER_AGENT} ^NetZIP [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Octopus [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Offline\ Explorer [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Offline\ Navigator [OR] 
RewriteCond %{HTTP_USER_AGENT} ^PageGrabber [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Papa\ Foto [OR] 
RewriteCond %{HTTP_USER_AGENT} ^pavuk [OR] 
RewriteCond %{HTTP_USER_AGENT} ^pcBrowser [OR] 
RewriteCond %{HTTP_USER_AGENT} ^RealDownload [OR] 
RewriteCond %{HTTP_USER_AGENT} ^ReGet [OR] 
RewriteCond %{HTTP_USER_AGENT} ^SiteSnagger [OR] 
RewriteCond %{HTTP_USER_AGENT} ^SmartDownload [OR] 
RewriteCond %{HTTP_USER_AGENT} ^SuperBot [OR] 
RewriteCond %{HTTP_USER_AGENT} ^SuperHTTP [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Surfbot [OR] 
RewriteCond %{HTTP_USER_AGENT} ^tAkeOut [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Teleport\ Pro [OR] 
RewriteCond %{HTTP_USER_AGENT} ^VoidEYE [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web\ Image\ Collector [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web\ Sucker [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebAuto [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebCopier [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebFetch [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebGo\ IS [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebLeacher [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebReaper [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebSauger [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Website\ eXtractor [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Website\ Quester [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebStripper [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebWhacker [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebZIP [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Wget [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Widow [OR] 
RewriteCond %{HTTP_USER_AGENT} ^WWWOFFLE [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Xaldon\ WebSpider [OR] 
RewriteCond %{HTTP_USER_AGENT} ^Zeus 
RewriteRule ^.* - [F,L]
RewriteEngine on
RewriteCond %{HTTP_REFERER} ^http(s)?://(www\.)?http://safebrowsing-cache.google.com/.*$ [NC]
RewriteRule .* - [F,L]

Options -Indexes
order allow,deny
deny from 89.207.18.182/22
deny from 173.194.69.147/22
deny from 149.3.176.145/22
deny from 66.235.156.128/22
deny from 173.194.69.125/22
deny from 173.194.69.120/22
deny from 173.194.69.102/22
deny from 173.194.69.95/22
deny from 173.194.69.94/22
deny from 173.194.69.91/22
deny from 173.0.88.2/22
deny from 173.0.84.2/22
deny from 173.0.84.34/22
deny from 173.0.88.2/22
deny from 173.0.88.34/22
deny from 2.20.6.85/22
deny from 63.245.213.92/22
deny from 173.194.69.106/22
deny from 173.194.69.147/22
deny from 173.194.69.99/22
deny from 173.194.69.103/22
deny from 173.194.69.104/22
deny from 173.194.69.105/22
deny from 173.194.69.94/22
deny from 173.194.69.106/22
deny from 173.194.69.147/22
deny from 173.194.69.99/22
deny from 173.194.69.103/22
deny from 173.194.69.104/22
deny from 173.194.69.105/22
deny from 173.194.69.94/22
deny from 63.245.213.92/22
deny from 63.245.217.20/22
deny from 64.62.203.172/22
deny from 173.194.69.102/22
deny from 173.194.69.113/22
deny from 173.194.69.138/22
deny from 173.194.69.139/22
deny from 173.194.69.100/22
deny from 173.194.69.101/22
deny from 64.62.203.172/22
deny from 63.245.217.71/22
deny from 188.112.175.207/22
deny from 66.235.139.166/22
deny from 66.235.138.2/22
deny from 66.235.138.59/22
deny from 66.235.139.153/22
deny from 66.235.139.152/22
deny from 66.235.138.44/22
deny from 66.235.139.118/22
deny from 66.235.138.18/22
deny from 66.235.139.121/22
deny from 66.235.138.19/22
deny from 66.235.134.160/22
deny from 66.235.133.8/22
deny from 66.235.133.52/22
deny from 66.235.133.33/22
deny from 66.235.132.152/22
deny from 66.235.133.62/22
deny from 66.235.132.232/22
deny from 66.235.132.118/22
deny from 66.235.133.11/22
deny from 66.235.132.121/22
deny from 149.20.57.227
deny from 199.48.147.36
deny from 37.59.162.218
deny from 89.122.57.201
deny from 69.163.205.29
deny from 74.120.15.150
deny from 109.163.233.200
deny from 79.120.86.20
deny from 31.172.30.4
deny from 109.65.136.19
deny from 66.150.14.185
deny from 50.97.98.130
deny from 66.150.14.185
deny from 80.237.226.73
deny from 64.34.184.153
deny from 66.230.230.230
deny from 71.165.245.158
deny from 74.120.15.150
deny from 76.73.56.7
deny from 77.109.139.87
deny from 81.218.219.122
deny from 83.86.110.188
deny from 83.142.228.14
deny from 31.25.189.48
deny from 50.87.144.22
deny from 185.14.187.240
deny from 67.205.95.175
deny from 83.249.87.238
deny from 85.17.92.13
deny from 85.235.31.248
deny from 87.118.104.203
deny from 88.80.28.70
deny from 88.208.121.151
deny from 89.253.97.235
deny from 91.121.170.32
deny from 94.249.153.47
deny from 95.143.193.145
deny from 109.169.29.56
deny from 109.123.119.163
deny from 137.56.163.46
deny from 137.56.163.64
deny from 173.193.221.28
deny from 192.251.226.205
deny from 192.251.226.206
deny from 199.48.147.35
deny from 199.48.147.36
deny from 199.48.147.38
deny from 199.48.147.40
deny from 199.48.147.41
deny from 208.66.135.190
deny from 209.44.114.178
deny from 209.159.142.164
deny from 209.159.143.130
deny from 213.220.233.230
deny from 8.18.38.105 
deny from 62.141.58.13
deny from 62.163.180.154
deny from 77.171.107.207
deny from 78.47.251.152   
deny from 81.169.155.246
deny from 82.194.86.135
deny from 83.163.192.49
deny from 91.121.152.114 
deny from 91.213.50.235
deny from 93.167.245.178 
deny from 94.23.215.184
deny from 174.138.169.218
deny from 64.34.162.160 
deny from 66.249.9.107   
deny from 66.96.16.32 
deny from 78.107.233.68
deny from 78.107.237.16
deny from 83.170.92.9
deny from 45.25.250.147
deny from 192.227.251.208
deny from 107.219.136.110
deny from 108.192.173.245
deny from 23.25.161.66
deny from 99.114.209.136
deny from 71.200.197.97
deny from 98.174.187.82
deny from 24.32.192.96
deny from 139.162.200.201
deny from 85.214.73.63 
deny from 91.124.187.225 
deny from 194.0.229.54
deny from 195.43.157.85 
deny from 212.78.238.92 
deny from 217.114.211.20  
deny from 62.24.222.132
deny from 62.24.222.131
deny from 66.235.133.14/22
deny from google.com
deny from paypal.com
deny from 112.2o7.com
deny from firefox.com
deny from apple.com
deny from env=stealthed
deny from 66.102.
deny from 38.100.
deny from 107.170.
deny from 149.20.
deny from 38.105.
deny from 74.125.
deny from 66.150.14.
deny from 54.176.
deny from 38.100.
deny from 184.173.
deny from 66.249.
deny from 128.242.
deny from 72.14.192.
deny from 208.65.144.
deny from 74.125.
deny from 209.85.128.
deny from 216.239.32.
deny from 74.125.
deny from 207.126.144.
deny from 173.194.
deny from 64.233.160.
deny from 72.14.192.
deny from 66.102.
deny from 64.18.
deny from 194.52.68.
deny from 194.72.238.
deny from 62.116.207.
deny from 212.50.193.
deny from 69.65.
deny from 69.65.
deny from 50.7.
deny from 131.212.
deny from 46.116.
deny from 62.90.
deny from 89.138.
deny from 82.166.
deny from 85.64.
deny from 212.235.
deny from 217.132.
deny from 50.97.
deny from 217.132.
deny from 209.85.
deny from 66.205.64.
deny from 204.14.48.
deny from 64.27.2.
deny from 67.15.
deny from 202.108.252.
deny from 193.47.80.
deny from 64.62.136.
deny from 66.221.
deny from 64.62.175.
deny from 198.54.
deny from 192.115.134.
deny from 216.252.167.
deny from 193.253.199.
deny from 69.61.12.
deny from 64.37.103.
deny from 38.144.36.
deny from 64.124.14.
deny from 206.28.72.
deny from 209.73.228.
deny from 158.108.
deny from 168.188.
deny from 66.207.120.
deny from 167.24.
deny from 192.118.48.
deny from 67.209.128.
deny from 12.148.209.
deny from 12.148.196.
deny from 193.220.178.
deny from 149.20.54.228
deny from 5.54.68.206
deny from 178.167.254.110
deny from 66.166.75.114
deny from 74.208.16.68
deny from 17.149.224.99
deny from 17.199.79.180
deny from 68.168.131.216
deny from 54.197.81.106
deny from 74.125.183.23
deny from 109.11.101.21
deny from 74.125.182.36
deny from 149.20.54.136
deny from 17.149.226.186
deny from 12.31.30.132
deny from 98.167.95.102
deny from 99.145.48.136
deny from 99.103.180.236
deny from 99.192.23.101
deny from 99.103.180.236
deny from 99.46.183.46
deny from 76.99.216.251
deny from 87.117.238.79
deny from 85.10.120.32
deny from 87.117.238.79
deny from 24.225.8.5
deny from 2.111.70.28
deny from 212.47.243.53
deny from 153.92.44.90
deny from 166.78.60.43
deny from 176.10.99.204
deny from 65.17.253.220
deny from 69.163.205.29
deny from 219.117.238.174
deny from 69.20.70.31
deny from 174.123.110.53
deny from 91.199.104.3
deny from 64.71.195.31
deny from 66.65.156.74
deny from 144.214.37.229
deny from 84.14.214.213
deny from 133.11.204.68
deny from 125.14.226.143
deny from 149.20.57.227
deny from 149.20.54.227
deny from 149.20.255.255
deny from 149.20.255.255
deny from 149.20.0.0
deny from 66.77.136
deny from 149.20.54.228
deny from 66.166.75.114
deny from 74.208.16.68
deny from 149.20.54.136
deny from 65.17.253.220
deny from 69.163.205.29
deny from 219.117.238.174
deny from 69.20.70.31
deny from 45.79.65.120
deny from 216.92.2.62
deny from 52.10.87.145
deny from 69.64.51.53
deny from 54.173.113.175
deny from 83.244.197.234
deny from 204.197.242.110
deny from 128.30.52.96
deny from 128.30.52.134
deny from 72.10.193.84
deny from 174.123.110.53
deny from 91.199.104.3
deny from 64.71.195.31
deny from 66.65.156.74
deny from 144.214.37.229
deny from 84.14.214.213
deny from 133.11.204.68
deny from 125.14.226.143
deny from 149.20.54.209
deny from 149.20
deny from 69.171
deny from 209.85.224
deny from 209.85.255
deny from 209.85.128
deny from 66.135
deny from 174.122
deny from 108.62
deny from 66.150.14
deny from 50.97
deny from 209.235
deny from 91.199.104
deny from 115.160
deny from 79.182
deny from 210.247
deny from 66.150
deny from 66.249
deny from 66.226
deny from 66.227.16
deny from 64.71
deny from 66.211
deny from 195.214
deny from 84.110
deny from 178.25
deny from 74.125
deny from 69.63.176.0/20
deny from 69.63.189
deny from 128.242.99.77
deny from 81.218.48.5
deny from 128.242.99.72
allow from all


RewriteEngine On
RewriteCond %{REMOTE_ADDR} ^82.20.255.107$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^76.14.85.24$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^93.40.130.78$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^2.121.190.252$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^23.242.68.213$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^2.223.224.69$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^80.229.105.197$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^80.254.147.172$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^77.101.127.41$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^82.54.115.146$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^95.226.168.197$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^5.69.136.148$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^86.171.70.64$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^86.129.125.226$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^213.107.231.88$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^86.146.245.57$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^31.53.224.194$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^120.148.12.43$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^94.194.178.112$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^90.204.228.241$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^88.105.240.73$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^2.121.21.64$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^80.0.148.21$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^2.54.154.72$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^151.229.112.124$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^80.6.237.96$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^2.121.49.127$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^62.253.57.202$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^81.152.78.229$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^94.14.118.204$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^90.209.39.146$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^86.165.5.137$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^90.192.253.68$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^81.156.252.14$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^146.199.47.198$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^77.98.237.164$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^90.217.140.26$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^151.227.39.177$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^90.203.109.12$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^31.52.145.193$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^99.251.0.99$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^99.230.38.140$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^107.77.75.109$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^149.88.2.145$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^184.179.23.226$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^135.19.218.241$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^49.219.158.113$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^103.252.200.250$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^71.171.83.6$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^175.136.232.227$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^79.144.136.116$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^115.84.150.92$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^81.61.46.78$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^86.84.114.70$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^88.149.210.40$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^89.101.249.51$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^93.34.226.73$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^88.105.22.66$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^82.51.42.94$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^77.99.151.7$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^2.125.57.146$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^90.216.213.197$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^91.84.84.220$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^86.128.34.205$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^90.244.156.143$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^151.16.187.65$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^109.234.204.162$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^86.175.99.122$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^93.149.240.89$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^210.1.192.157$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^92.4.67.57$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^86.142.127.71$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^180.245.160.222$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^90.217.237.165$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^128.199.243.158$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^125.164.221.196$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^43.224.32.4$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^2.32.147.131$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^188.82.164.38$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^62.108.225.74$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^93.45.174.233$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^79.12.43.76$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^93.46.146.187$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^151.29.205.42$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^178.162.209.102$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^104.207.136.15$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^74.67.56.132$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^151.73.34.28$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^87.20.207.80$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^90.210.204.191$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^79.54.139.160$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^78.150.230.68$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^79.9.75.66$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^151.21.113.103$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^82.58.95.242$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^82.53.106.11$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^109.147.115.64$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^151.64.28.198$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^82.52.96.136$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^110.77.136.54$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^93.147.178.223$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^212.195.233.226$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^50.247.22.220$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^216.232.97.55$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^105.235.106.219$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^80.111.42.18$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^2.33.107.202$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^202.62.17.23$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^122.151.70.29$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^99.21.213.219$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^95.45.74.65$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^93.150.226.78$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^92.251.204.29$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^105.139.242.211$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^73.16.208.33$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{REMOTE_ADDR} ^86.128.105.209$
RewriteRule .* https://www.paypal.com [R,L]
RewriteCond %{HTTP_USER_AGENT} ^-?$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ADSARobot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Advanced\ Email\ Extractor [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ah-ha [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} aktuelles [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} almaden [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} amzn_assoc [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Anarchie [NC,OR]
RewriteCond %{HTTP_USER_AGENT} @nonymouse [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Art-Online [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ASPSeek [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ASSORT [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ATHENS [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Atomz [NC,OR]
RewriteCond %{HTTP_USER_AGENT} attach [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} attache [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} autoemailspider [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} BackWeb [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Bandit [NC,OR]
RewriteCond %{HTTP_USER_AGENT} BatchFTP [NC,OR]
RewriteCond %{HTTP_USER_AGENT} bdfetch [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} big.brother [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} BlackWidow [NC,OR]
RewriteCond %{HTTP_USER_AGENT} bmclient [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Boston\ Project [NC,OR]
RewriteCond %{HTTP_USER_AGENT} BravoBrian\ SpiderEngine\ MarcoPolo [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Buddy [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Bullseye [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} bumblebee [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} capture [NC,OR]
RewriteCond %{HTTP_USER_AGENT} CherryPicker [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ChinaClaw [NC,OR]
RewriteCond %{HTTP_USER_AGENT} CICC [NC,OR]
RewriteCond %{HTTP_USER_AGENT} clipping [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Crescent [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Crescent\ Internet\ ToolPack [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Custo [NC,OR]
RewriteCond %{HTTP_USER_AGENT} cyberalert [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Deweb [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} diagem [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Digger [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Digimarc [NC,OR]
RewriteCond %{HTTP_USER_AGENT} DIIbot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} DirectUpdate [NC,OR]
RewriteCond %{HTTP_USER_AGENT} disco [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} DISCoFinder [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Download\ Accelerator [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Download\ Demon [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Download\ Wonder [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Downloader [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Drip [NC,OR]
RewriteCond %{HTTP_USER_AGENT} DSurf15a [NC,OR]
RewriteCond %{HTTP_USER_AGENT} DTS.Agent [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} EasyDL [NC,OR]
RewriteCond %{HTTP_USER_AGENT} eCatch [NC,OR]
RewriteCond %{HTTP_USER_AGENT} echo\ extense [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ecollector [NC,OR]
RewriteCond %{HTTP_USER_AGENT} efp@gmx\.net [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Email\ Extractor [NC,OR]
RewriteCond %{HTTP_USER_AGENT} EirGrabber [NC,OR]
RewriteCond %{HTTP_USER_AGENT} EmailCollector [NC,OR]
RewriteCond %{HTTP_USER_AGENT} EmailSiphon [NC,OR]
RewriteCond %{HTTP_USER_AGENT} EmailWolf [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Express\ WebPictures [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ExtractorPro [NC,OR]
RewriteCond %{HTTP_USER_AGENT} EyeNetIE [NC,OR]
RewriteCond %{HTTP_USER_AGENT} fastlwspider [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} FavOrg [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Favorites\ Sweeper [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Fetch [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Fetch\ API\ Request [NC,OR]
RewriteCond %{HTTP_USER_AGENT} FEZhead [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} FileHound [NC,OR]
RewriteCond %{HTTP_USER_AGENT} flashget [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} FlashGet\ WebWasher [NC,OR]
RewriteCond %{HTTP_USER_AGENT} FlipDog [NC,OR]
RewriteCond %{HTTP_USER_AGENT}    FlipDog [NC,OR]
RewriteCond %{HTTP_USER_AGENT} FlickBot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} fluffy [NC,OR]
RewriteCond %{HTTP_USER_AGENT} frontpage [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} FrontPage [NC,OR]
RewriteCond %{HTTP_USER_AGENT}    FrontPage [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} GalaxyBot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Generic [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Getleft [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} GetRight [NC,OR]
RewriteCond %{HTTP_USER_AGENT} GetSmart [NC,OR]
RewriteCond %{HTTP_USER_AGENT} GetWeb! [NC,OR]
RewriteCond %{HTTP_USER_AGENT} GetWebPage [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} gigabaz [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Girafabot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} go-ahead-got-it [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} GornKer [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Go!Zilla [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Grabber [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} GrabNet [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Grafula [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Green\ Research [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Harvest [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} hhjhj@yahoo [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} hloader [NC,OR]
RewriteCond %{HTTP_USER_AGENT} HMView [NC,OR]
RewriteCond %{HTTP_USER_AGENT} HomePageSearch [NC,OR]
RewriteCond %{HTTP_USER_AGENT} httpdown [NC,OR]
RewriteCond %{HTTP_USER_AGENT} HTTP\ agent [NC,OR]
RewriteCond %{HTTP_USER_AGENT} http\ generic [NC,OR]
RewriteCond %{HTTP_USER_AGENT} HTTPConnect [NC,OR]
RewriteCond %{HTTP_USER_AGENT} HTTrack [NC,OR]
RewriteCond %{HTTP_USER_AGENT} IBM_Planetwide [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Image\ Stripper [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Image\ Sucker [NC,OR]
RewriteCond %{HTTP_USER_AGENT} imagefetch [NC,OR]
RewriteCond %{HTTP_USER_AGENT} IncyWincy [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Indy\ Library [NC,OR]
RewriteCond %{HTTP_USER_AGENT} informant [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Ingelin [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} IPiumBot\ laurion(dot)com [NC,OR]
RewriteCond %{HTTP_USER_AGENT} InterGET [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Internet\ Ninja [NC,OR]
RewriteCond %{HTTP_USER_AGENT} InternetLinkAgent [NC,OR]
RewriteCond %{HTTP_USER_AGENT} InternetSeer\.com [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Iria [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Irvine [NC,OR]
RewriteCond %{HTTP_USER_AGENT} JBH*Agent [NC,OR]
RewriteCond %{HTTP_USER_AGENT} JetCar [NC,OR]
RewriteCond %{HTTP_USER_AGENT} JOC [NC,OR]
RewriteCond %{HTTP_USER_AGENT} JOC\ Web\ Spider [NC,OR]
RewriteCond %{HTTP_USER_AGENT} JustView [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Kapere [NC,OR]
RewriteCond %{HTTP_USER_AGENT} KWebGet [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Lachesis [NC,OR]
RewriteCond %{HTTP_USER_AGENT} larbin [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} LeechFTP [NC,OR]
RewriteCond %{HTTP_USER_AGENT} LexiBot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} lftp [NC,OR]
RewriteCond %{HTTP_USER_AGENT} libwww [NC,OR]
RewriteCond %{HTTP_USER_AGENT} libwww-perl [NC,OR]
RewriteCond %{HTTP_USER_AGENT} likse [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Link*Sleuth [NC,OR]
RewriteCond %{HTTP_USER_AGENT} LINKS\ ARoMATIZED [NC,OR]
RewriteCond %{HTTP_USER_AGENT} LinkWalker [NC,OR]
RewriteCond %{HTTP_USER_AGENT} LWP [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} lwp-trivial [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Magnet [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Mac\ Finder [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Mag-Net [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Mass\ Downloader [NC,OR]
RewriteCond %{HTTP_USER_AGENT} MCspider [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Microsoft\ URL\ Control [NC,OR]
RewriteCond %{HTTP_USER_AGENT} MIDown\ tool [NC,OR]
RewriteCond %{HTTP_USER_AGENT} minibot\(NaverRobot\) [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Mirror [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Missigua\ Locator [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Mister\ PiX [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} MMMtoCrawl\/UrlDispatcherLLL [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Mozilla$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} MSProxy [NC,OR]
RewriteCond %{HTTP_USER_AGENT} multithreaddb [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Naja [NC,OR]
RewriteCond %{HTTP_USER_AGENT} nationaldirectory [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Navroad [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NearSite [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Net\ Vampire [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NetAnts [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NetCarta [NC,OR] 
RewriteCond %{HTTP_USER_AGENT}    NetGrabber [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NetGrabber [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NetMechanic [NC,OR]
RewriteCond %{HTTP_USER_AGENT} netprospector [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} NetResearchServer [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} NetSpider [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NetZIP [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NetZip\ Downloader [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NetZippy [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NEWT [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} nicerspro [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} NICErsPRO [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NPBot [NC,OR]
RewriteCond %{HTTP_USER_AGENT}   NutchCVS [NC,OR]
RewriteCond %{HTTP_USER_AGENT} NutchCVS [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Octopus [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Offline\ Explorer [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Offline\ Navigator [NC,OR]
RewriteCond %{HTTP_USER_AGENT} OpaL [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Openfind [NC,OR]
RewriteCond %{HTTP_USER_AGENT} OpenTextSiteCrawler [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} OrangeBot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} PackRat [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} PageGrabber [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Papa\ Foto [NC,OR]
RewriteCond %{HTTP_USER_AGENT} pavuk [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} PersonaPilot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} pcBrowser [NC,OR]
RewriteCond %{HTTP_USER_AGENT} PingALink [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Pockey [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Program\ Shareware [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Proxy [NC,OR]
RewriteCond %{HTTP_USER_AGENT} psbot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} PSurf [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} puf [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Pump [NC,OR]
RewriteCond %{HTTP_USER_AGENT} PushSite [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} QRVA [NC,OR]
RewriteCond %{HTTP_USER_AGENT} QuepasaCreep [NC,OR]
RewriteCond %{HTTP_USER_AGENT} RealDownload [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Reaper [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Recorder [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ReGet [NC,OR]
RewriteCond %{HTTP_USER_AGENT} replacer [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} RepoMonkey [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Robozilla [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Rover [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} RPT-HTTPClient [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Rsync [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} SearchExpress [NC,OR]
RewriteCond %{HTTP_USER_AGENT} searchhippo [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} searchterms\.it [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Second\ Street\ Research [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Seeker [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Shai [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} sitecheck [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} SiteMapper [NC,OR]
RewriteCond %{HTTP_USER_AGENT} SiteSnagger [NC,OR]
RewriteCond %{HTTP_USER_AGENT} SlySearch [NC,OR]
RewriteCond %{HTTP_USER_AGENT} SmartDownload [NC,OR]
RewriteCond %{HTTP_USER_AGENT} snagger [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} SpaceBison [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Spegla [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} SpiderBot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} SqWorm [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Star\ Downloader [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Stripper [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Sucker [NC,OR]
RewriteCond %{HTTP_USER_AGENT} SuperBot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} SuperHTTP [NC,OR]
RewriteCond %{HTTP_USER_AGENT}   Surf15a  [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Surf15a  [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Surfbot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} SurfWalker [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} SurveyBot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Szukacz [NC,OR]
RewriteCond %{HTTP_USER_AGENT} tAkeOut [NC,OR]
RewriteCond %{HTTP_USER_AGENT} tarspider [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Teleport\ Pro [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Telesoft [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Templeton [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} TrueRobot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} TuringOS [NC,OR]
RewriteCond %{HTTP_USER_AGENT} TurnitinBot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} TV33_Mercator [NC,OR]
RewriteCond %{HTTP_USER_AGENT} UIowaCrawler [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} URL_Spider_Pro [NC,OR]
RewriteCond %{HTTP_USER_AGENT} UtilMind [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Vacuum [NC,OR]
RewriteCond %{HTTP_USER_AGENT} vagabondo [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} vayala [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} visibilitygap [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} vobsub [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} VoidEYE [NC,OR]
RewriteCond %{HTTP_USER_AGENT} vspider [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} w3mir [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} web\.by\.mail [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Web\ Data\ Extractor [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Web\ Downloader [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Web\ Image\ Collector [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Web\ Sucker [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WebAuto [NC,OR]
RewriteCond %{HTTP_USER_AGENT} webbandit [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} WebCapture [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Webclipping [NC,OR]
RewriteCond %{HTTP_USER_AGENT} webcollage [NC,OR]
RewriteCond %{HTTP_USER_AGENT} webcollector [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} WebCopier [NC,OR]
RewriteCond %{HTTP_USER_AGENT} webcraft@bea [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} WebDAV [NC,OR]
RewriteCond %{HTTP_USER_AGENT} webdevil [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} webdownloader [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Webdup [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WebEmailExtractor [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WebFetch [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WebGo\ IS [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WebHook [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Webinator [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WebLeacher [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WEBMASTERS [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} WebMiner [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} WebMirror [NC,OR]
RewriteCond %{HTTP_USER_AGENT} webmole [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} WebReaper [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WebSauger [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WEBsaver [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Website\ eXtractor [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Website\ Quester [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WebSnake [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Webster [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WebStripper [NC,OR]
RewriteCond %{HTTP_USER_AGENT} websucker [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} webvac [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} webwalk [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} WebWhacker [NC,OR]
RewriteCond %{HTTP_USER_AGENT} webweasel [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} WebZIP [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Wget [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} whizbang [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} WhosTalking [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Widow [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WISEbot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} WUMPUS [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Wweb [NC,OR]
RewriteCond %{HTTP_USER_AGENT} WWWOFFLE [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Wysigot [NC,OR]  
RewriteCond %{HTTP_USER_AGENT} webdownloader [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Xaldon\ WebSpider [NC,OR]
RewriteCond %{HTTP_USER_AGENT} XGET [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} x-Tractor [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Yandex [NC,OR]
RewriteCond %{HTTP_USER_AGENT} Zeus.*Webster [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} Zeus [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Anarchie$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Aspi [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^ASPSeek$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^atSpider [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^attach [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^autoemailspider$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^BackWeb [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Baiduspider  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Bandit [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^BatchFTP [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Blackstreet [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^BlackWidow [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Buddy [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Bullseye$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^bumblebee$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Caitoo [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^capture$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^CherryPicker [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^China\ Local\ Browse [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^ChinaClaw [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^CICC$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^clipping$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^collage$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Collector [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^ContentSmartz [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Copier [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Crescent [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Curl [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Custo$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^DA [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^DataCha0s [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^DBrowse [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Demo\ Bot\ DOT [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^diagem$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^DIIbot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^DISCo\ Pump [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Download\ for\ X [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Download\ Demon [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Download\ Wonder [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Downloader [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Drip [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^DSurf [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^DTS\ Agent$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^dual$proxy$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^easydl  [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^EBrowse [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^eCatch [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Eclipt\ Mirroring\ Tool [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Educate\ Search [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^EirGrabber [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^EmailCollector [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^EmailSiphon [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^EmailWolf [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Express\ WebPictures [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^ExtractorPro [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^EyeNetIE [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Faxobot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^FileHound [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^FlashGet [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^FlashSite [NC,OR]  
RewriteCond %{HTTP_USER_AGENT} ^Franklin\ Locator [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Full\ Web\ Bot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^GetBot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^GetRight [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^GetSmart [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^GetWeb [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^gigabaz$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^GNU\ Wget [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Go!Zilla [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Go\-Ahead\-Got\-It [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^GornKer [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^gotit [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Grab [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Grafula [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Greed [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^grub  [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^hloader$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^HMView [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Holmes [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Htget [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^httpdown$ [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^ia_archiver [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^iFox98  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Image\ Stripper$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Image\ Sucker$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^imagefetch$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Industry\ Program [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^informant$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^inSite [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Interarchy [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^InterGET [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Internet\ Angel [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Internet\ Marauder [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Internet\ Ninja [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^InternetSeer.com [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^IpiumBot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Iria [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Irvine [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^ISC\ Systems\ iRc [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^IUPUI\ Research\ Bot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^JBH$Agent$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^JetCar [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^JOC\ Web\ Spider [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^JustView [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^larbin$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^LARBIN\-EXPERIMENTAL [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^LeechFTP [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^LetsCrawl [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^LexiBot$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^lftp [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^likse [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Lincoln\ State\ Web\ Browser [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Link [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^LNSpiderguy [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^lotus$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^lwp [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Mac\ Finder [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Magnet [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mag\-Net [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mass\ Downloader [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Memo [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^MFC\ Foundation\ Class\ Library [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Mhtml [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Microsoft\ URL\ Control [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Microsoft\.URL [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^MIDown\ tool [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mirror [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Missauga\ Locate [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Missouri\ College\ Browse [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mister\ PiX [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Mizzu\ Labs [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Mo\ College [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Monica [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mozilla.*Advanced\ Email\ Extractor [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mozilla.*DTS\ Agent [NC,OR]  
RewriteCond %{HTTP_USER_AGENT} ^Mozilla.*efp@gmx\.net [NC,OR]  
RewriteCond %{HTTP_USER_AGENT} ^Mozilla.*Indy\ Library [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mozilla.*Iplexx\ Spider [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mozilla.*NEWT [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Mozilla.*Version [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^MSFrontPage [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^MSProxy$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^multithreaddb$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^MVAClient [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^NASA\ Search [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^NavigatorCompanion [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Navroad [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^NearSite [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Net\ Vampire [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^NetAnts [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^NetAttach&#233;\ Pro [NC,OR]  
RewriteCond %{HTTP_USER_AGENT} ^NetSpider [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Networkz  [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^NetZip [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^NICErsPRO [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Ninja [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^NPBot\ $ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Nsauditor [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^obot$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Octopus [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Offline  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Openfind$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Page\ Sucker   [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^PageGrabber [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Papa\Foto [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Pavuk  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^PBrowse [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^pcBrowser [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^PersonaPilot$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^PEval [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Ping [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Pockey [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Poirot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Port\ Huron\ Labs [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Production\ Bot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Program\ Shareware [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Proxy$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^psbot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^psycheclone [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Pump [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^QRVA$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^RealDownload [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Reaper [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Recorder [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^ReGet [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^replacer$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^S\.T\.A\.L\.K\.E\.R\. [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^searchbot\ admin@google.com [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^SearchExpress$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Seeker$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Siphon [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Site\ Eater  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^sitecheck.internetseer.com [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^SiteSnagger [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Slurp$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^SlySearch$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^SmartBud [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^SmartDownload [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^snagger$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Snake [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^snap\.com [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Snapbot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Snarf  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Sogou [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Sohu [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^SpaceBison [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Sqworm$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Strip$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Stripper [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Sucker [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^SuperBot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^SuperHTTP [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^[0-9A-Za-z]Surf [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Surf$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Surfbot [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^surfcontrol$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^SurfWalker$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^SurveyBot$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Szukacz$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^tAkeOut [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Teleport$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Teleport\ Pro [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^troovzibot [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^turingos$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^TurnitinBot$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^TV33_Mercator$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Under\ the\ Rainbow [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^URLSpiderPro$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Vacuum [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^vagabondo$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^vayala$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^visibilitygap$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^VoidEYE [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^W3mir  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^watcher$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Web\ Buddy  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web\ Devil  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web\ Downloader  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web\ Image\ Collector [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web\ Retriever  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web\ Tondeuse  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web\ Sucker [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Web@pc  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebGrabber  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebMirror  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebAuto [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^[Ww]eb[Bb]andit [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebCapture [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^webcollage [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^WebCopier [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebDown [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebEMailExtrac.* [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebFetch [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebGo\ IS [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^WebHook [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^WebLeacher [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^WebMiner [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^WebMirror [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^WebReaper [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebRecorder [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebRobot  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebSauger [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WEBsaver [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Website$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Website\ eXtractor [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Website\ Quester [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^WebSnake  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Webster [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebStripper [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebVCR  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebVulnCrawl [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^WebWhacker [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WebZIP [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Wells\ Search [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^WEP\ Search [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Wget [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Whacker [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Widow [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WinDownload  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Wweb$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^WWWCopy [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^WWWoffle [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Wysigot  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^Xaldon$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Xaldon\ WebSpider [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^X\-FileGet  [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} ^x\-Tractor$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Zeus$ [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Zeus.*Webster [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^ZyBorg$ [NC,OR]

RewriteCond %{HTTP_REFERER} ^XXX

# 
# Un h&#244;te qui tente de se cacher dans une reverse DNS lookup 
RewriteCond %{REMOTE_HOST} ^private$ [NC,OR] 
# 
# Sites de surveillance du Web (peut n&#233;cessiter ipchains) 
RewriteCond %{HTTP_USER_AGENT} traffixer [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} netfactual [NC,OR] 
RewriteCond %{HTTP_USER_AGENT} netcraft [NC,OR] 
# 
# Un faux referrer souvent utilis&#233; 
RewriteCond %{HTTP_USER_AGENT} ^[^?]*iaea\.org [NC,OR] 
# 
# Le referrer "addresses.com" est utilis&#233; par un email address extractor 
RewriteCond %{HTTP_USER_AGENT} ^[^?]*addresses\.com [NC,OR] 
# 
# Bloque les navigateurs se dissimulants avec des lettres et chiffres al&#233;atoires 
RewriteCond %{HTTP_USER_AGENT} [0-9A-Za-z]{15,} [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^[0-9A-Za-z]+$ [NC,OR]

# Une redirection interne compte pour 2 hits 
# Une redirection externe compte pour 1 hit

SetEnvIfNoCase User-Agent "aipbot/1.0" bad_bot
SetEnvIfNoCase User-Agent "ia_archiver" bad_bot
SetEnvIfNoCase User-Agent "larbin_2.6.3" bad_bot
SetEnvIfNoCase User-Agent "psycheclone" bad_bot
SetEnvIfNoCase User-Agent "SBIder/0.8-dev" bad_bot
SetEnvIfNoCase User-Agent "SurveyBot/2.3" bad_bot
SetEnvIfNoCase User-Agent "^yandex" bad_bot 
SetEnvIfNoCase User-Agent "^Alexibot" bad_bot 
SetEnvIfNoCase User-Agent "^Art-Online.com 0.9" bad_bot 
SetEnvIfNoCase User-Agent "^asterias" bad_bot 
SetEnvIfNoCase User-Agent "^BackDoorBot" bad_bot 
SetEnvIfNoCase User-Agent "^Black.Hole" bad_bot 
SetEnvIfNoCase User-Agent "^BlackWidow" bad_bot 
SetEnvIfNoCase User-Agent "^BlowFish" bad_bot 
SetEnvIfNoCase User-Agent "^BotALot" bad_bot 
SetEnvIfNoCase User-Agent "^BuiltBotTough" bad_bot 
SetEnvIfNoCase User-Agent "^Bullseye" bad_bot 
SetEnvIfNoCase User-Agent "^BunnySlippers" bad_bot 
SetEnvIfNoCase User-Agent "^Cegbfeieh" bad_bot 
SetEnvIfNoCase User-Agent "^CheeseBot" bad_bot 
SetEnvIfNoCase User-Agent "^CherryPicker" bad_bot 
SetEnvIfNoCase User-Agent "^ChinaClaw" bad_bot 
SetEnvIfNoCase User-Agent "^CopyRightCheck" bad_bot 
SetEnvIfNoCase User-Agent "^cosmos" bad_bot 
SetEnvIfNoCase User-Agent "^Crescent" bad_bot 
SetEnvIfNoCase User-Agent "^Custo" bad_bot 
SetEnvIfNoCase User-Agent "^DISCo" bad_bot 
SetEnvIfNoCase User-Agent "^DittoSpyder" bad_bot 
SetEnvIfNoCase User-Agent "^Download\ Demon" bad_bot 
SetEnvIfNoCase User-Agent "^eCatch" bad_bot 
SetEnvIfNoCase User-Agent "^EirGrabber" bad_bot 
SetEnvIfNoCase User-Agent "^EmailCollector" bad_bot 
SetEnvIfNoCase User-Agent "^EmailSiphon" bad_bot 
SetEnvIfNoCase User-Agent "^EmailWolf" bad_bot 
SetEnvIfNoCase User-Agent "^EroCrawler" bad_bot 
SetEnvIfNoCase User-Agent "^Express\ WebPictures" bad_bot 
SetEnvIfNoCase User-Agent "^ExtractorPro" bad_bot 
SetEnvIfNoCase User-Agent "^EyeNetIE" bad_bot 
SetEnvIfNoCase User-Agent "^FlashGet" bad_bot 
SetEnvIfNoCase User-Agent "^Foobot" bad_bot 
SetEnvIfNoCase User-Agent "^FrontPage" bad_bot 
SetEnvIfNoCase User-Agent "^GetRight" bad_bot 
SetEnvIfNoCase User-Agent "^GetWeb!" bad_bot 
SetEnvIfNoCase User-Agent "^Go!Zilla" bad_bot 
SetEnvIfNoCase User-Agent "^Go-Ahead-Got-It" bad_bot 
SetEnvIfNoCase User-Agent "^GrabNet" bad_bot 
SetEnvIfNoCase User-Agent "^Grafula" bad_bot 
SetEnvIfNoCase User-Agent "^Harvest" bad_bot 
SetEnvIfNoCase User-Agent "^hloader" bad_bot 
SetEnvIfNoCase User-Agent "^HMView" bad_bot 
SetEnvIfNoCase User-Agent "^httplib" bad_bot 
SetEnvIfNoCase User-Agent "^HTTrack" bad_bot 
SetEnvIfNoCase User-Agent "^HTTrack 3.0x" bad_bot 
SetEnvIfNoCase User-Agent "^humanlinks" bad_bot 
SetEnvIfNoCase User-Agent "^ia_archiver" bad_bot 
SetEnvIfNoCase User-Agent "^Image\ Stripper" bad_bot 
SetEnvIfNoCase User-Agent "^Image\ Sucker" bad_bot 
SetEnvIfNoCase User-Agent "^Indy\ Library" bad_bot 
SetEnvIfNoCase User-Agent "^InfoNaviRobot" bad_bot 
SetEnvIfNoCase User-Agent "^InterGET" bad_bot 
SetEnvIfNoCase User-Agent "^Internet\ Ninja" bad_bot 
SetEnvIfNoCase User-Agent "^JennyBot" bad_bot 
SetEnvIfNoCase User-Agent "^JetCar" bad_bot 
SetEnvIfNoCase User-Agent "^JOC\ Web\ Spider" bad_bot 
SetEnvIfNoCase User-Agent "^Kenjin.Spider" bad_bot 
SetEnvIfNoCase User-Agent "^Keyword.Density" bad_bot 
SetEnvIfNoCase User-Agent "^larbin" bad_bot 
SetEnvIfNoCase User-Agent "^LeechFTP" bad_bot 
SetEnvIfNoCase User-Agent "^LexiBot" bad_bot 
SetEnvIfNoCase User-Agent "^libWeb/clsHTTP" bad_bot 
SetEnvIfNoCase User-Agent "^LinkextractorPro" bad_bot 
SetEnvIfNoCase User-Agent "^LinkScan/8.1a.Unix" bad_bot 
SetEnvIfNoCase User-Agent "^LinkWalker" bad_bot 
SetEnvIfNoCase User-Agent "^lwp-trivial" bad_bot 
SetEnvIfNoCase User-Agent "^Mass\ Downloader" bad_bot 
SetEnvIfNoCase User-Agent "^Mata.Hari" bad_bot 
SetEnvIfNoCase User-Agent "^Microsoft.URL" bad_bot 
SetEnvIfNoCase User-Agent "^MIDown\ tool" bad_bot 
SetEnvIfNoCase User-Agent "^MIIxpc" bad_bot 
SetEnvIfNoCase User-Agent "^Mister\ PiX" bad_bot 
SetEnvIfNoCase User-Agent "^moget" bad_bot 
SetEnvIfNoCase User-Agent "^Mozilla/3.Mozilla/2.01" bad_bot 
SetEnvIfNoCase User-Agent "^Mozilla.*NEWT"  bad_bot 
SetEnvIfNoCase User-Agent "^Navroad" bad_bot 
SetEnvIfNoCase User-Agent "^NaverRobot" bad_bot 
SetEnvIfNoCase User-Agent "^NearSite" bad_bot 
SetEnvIfNoCase User-Agent "^NetAnts" bad_bot 
SetEnvIfNoCase User-Agent "^NetMechanic" bad_bot  
SetEnvIfNoCase User-Agent "^NetSpider" bad_bot 
SetEnvIfNoCase User-Agent "^Net\ Vampire" bad_bot 
SetEnvIfNoCase User-Agent "^NetZIP" bad_bot 
SetEnvIfNoCase User-Agent "^NICErsPRO" bad_bot 
SetEnvIfNoCase User-Agent "^NPbot" bad_bot 
SetEnvIfNoCase User-Agent "^Octopus" bad_bot 
SetEnvIfNoCase User-Agent "^Offline\ Explorer" bad_bot 
SetEnvIfNoCase User-Agent "^Offline\ Navigator" bad_bot 
SetEnvIfNoCase User-Agent "^Openfind" bad_bot 
SetEnvIfNoCase User-Agent "^PageGrabber" bad_bot 
SetEnvIfNoCase User-Agent "^Papa\ Foto" bad_bot 
SetEnvIfNoCase User-Agent "^pavuk" bad_bot 
SetEnvIfNoCase User-Agent "^pcBrowser" bad_bot 
SetEnvIfNoCase User-Agent "^ProPowerBot/2.14" bad_bot 
SetEnvIfNoCase User-Agent "^ProWebWalker" bad_bot 
SetEnvIfNoCase User-Agent "^psbot/0.1" bad_bot 
SetEnvIfNoCase User-Agent "^QueryN.Metasearch" bad_bot 
SetEnvIfNoCase User-Agent "^QueryN.Metasearch" bad_bot 
SetEnvIfNoCase User-Agent "^QuepasaCreep v0.9.13" bad_bot 
SetEnvIfNoCase User-Agent "^QuepasaCreep v0.9.14" bad_bot 
SetEnvIfNoCase User-Agent "^ReGet" bad_bot 
SetEnvIfNoCase User-Agent "^RepoMonkey" bad_bot 
SetEnvIfNoCase User-Agent "^RMA" bad_bot 
SetEnvIfNoCase User-Agent "^SiteSnagger" bad_bot 
SetEnvIfNoCase User-Agent "^SiteMapper 1.04" bad_bot 
SetEnvIfNoCase User-Agent "^SlySearch" bad_bot 
SetEnvIfNoCase User-Agent "^SmartDownload" bad_bot 
SetEnvIfNoCase User-Agent "^SpankBot" bad_bot 
SetEnvIfNoCase User-Agent "^spanner"  bad_bot 
SetEnvIfNoCase User-Agent "^SuperBot" bad_bot 
SetEnvIfNoCase User-Agent "^SuperHTTP" bad_bot 
SetEnvIfNoCase User-Agent "^Surfbot" bad_bot 
SetEnvIfNoCase User-Agent "^suzuran" bad_bot 
SetEnvIfNoCase User-Agent "^Szukacz/1.4"  bad_bot 
SetEnvIfNoCase User-Agent "^tAkeOut" bad_bot 
SetEnvIfNoCase User-Agent "^Teleport\ Pro" bad_bot 
SetEnvIfNoCase User-Agent "^Telesoft" bad_bot 
SetEnvIfNoCase User-Agent "^TurnitinBot/1.5" bad_bot 
SetEnvIfNoCase User-Agent "^The.Intraformant" bad_bot 
SetEnvIfNoCase User-Agent "^TheNomad" bad_bot 
SetEnvIfNoCase User-Agent "^TightTwatBot" bad_bot 
SetEnvIfNoCase User-Agent "^Titan" bad_bot 
SetEnvIfNoCase User-Agent "^toCrawl/UrlDispatcher" bad_bot 
SetEnvIfNoCase User-Agent "^True_Robot" bad_bot  
SetEnvIfNoCase User-Agent "^turingos" bad_bot 
SetEnvIfNoCase User-Agent "^URLy.Warning" bad_bot 
SetEnvIfNoCase User-Agent "^VCI" bad_bot 
SetEnvIfNoCase User-Agent "^verticrawl" bad_bot 
SetEnvIfNoCase User-Agent "^VoidEYE" bad_bot 
SetEnvIfNoCase User-Agent "^Web\ Image\ Collector" bad_bot 
SetEnvIfNoCase User-Agent "^Web\ Sucker" bad_bot 
SetEnvIfNoCase User-Agent "^WebAuto" bad_bot 
SetEnvIfNoCase User-Agent "^WebBandit" bad_bot 
SetEnvIfNoCase User-Agent "^WebCopier" bad_bot 
SetEnvIfNoCase User-Agent "^WebEMailExtrac.*" bad_bot 
SetEnvIfNoCase User-Agent "^WebEnhancer" bad_bot 
SetEnvIfNoCase User-Agent "^WebFetch" bad_bot 
SetEnvIfNoCase User-Agent "^WebGo\ IS" bad_bot 
SetEnvIfNoCase User-Agent "^Web.Image.Collector" bad_bot 
SetEnvIfNoCase User-Agent "^WebLeacher" bad_bot 
SetEnvIfNoCase User-Agent "^WebmasterWorldForumBot" bad_bot 
SetEnvIfNoCase User-Agent "^WebReaper" bad_bot 
SetEnvIfNoCase User-Agent "^WebSauger" bad_bot 
SetEnvIfNoCase User-Agent "^Website\ eXtractor" bad_bot 
SetEnvIfNoCase User-Agent "^Website\ Quester" bad_bot 
SetEnvIfNoCase User-Agent "^Webster.Pro" bad_bot 
SetEnvIfNoCase User-Agent "^WebStripper" bad_bot 
SetEnvIfNoCase User-Agent "^WebWhacker" bad_bot 
SetEnvIfNoCase User-Agent "^WebZIP" bad_bot 
SetEnvIfNoCase User-Agent "^Wget" bad_bot 
SetEnvIfNoCase User-Agent "^Widow" bad_bot 
SetEnvIfNoCase User-Agent "^[Ww]eb[Bb]andit" bad_bot 
SetEnvIfNoCase User-Agent "^WWWOFFLE" bad_bot 
SetEnvIfNoCase User-Agent "^WWW-Collector-E" bad_bot 
SetEnvIfNoCase User-Agent "^Xaldon\ WebSpider" bad_bot 
SetEnvIfNoCase User-Agent "^Xenu's" bad_bot 
SetEnvIfNoCase User-Agent "^Zeus" bad_bot 
SetEnvIfNoCase User-Agent "^exabot.com" bad_bot 
<Limit GET POST PUT HEAD> 

order allow,deny 
allow from all 
deny from env=bad_bot 

</Limit> 
order allow,deny 
deny from zeustracker.abuse.ch
deny from virustotal.com
deny from adminus.net
deny from aegislab.com
deny from alienvault.com
deny from antiy.net
deny from avast.com
deny from team-cymru.org
deny from eset.com
deny from fireeye.com
deny from microsoft.com
deny from kernelmode.info
deny from malwaredomainlist.com
deny from wilderssecurity.com
deny from eset-la.com
deny from blogs.eset-la.com
deny from welivesecurity.com
deny from urlquery.net
deny from anubis.iseclab.org
deny from reclassify.url.trendmicro.com
deny from dragonjar.org
deny from vpro.su
deny from cclub.su
deny from securitybydefault.com
deny from matthewfl.com
deny from garyshood.com
deny from virscan.org
deny from malwarebytes.org
deny from community.norton.com
deny from avira.com
deny from bitdefender.com
deny from c-sirt.org
deny from clean-mx.de
deny from crdfglobal.org
deny from comodo.com
deny from fbi.gov
deny from interpol.int
deny from cybercitizenship.org
deny from cybercrime-tracker.net
deny from drweb.com
deny from kaspersky.com
deny from bitdefender.com
deny from malwares.com
deny from zvelo.com
deny from zcloudsec.com
deny from yandex.com
deny from facebook.com
deny from hotmail.com
deny from google.com
deny from wepawet.iseclab.org
deny from websense.com
deny from vxvault.siri-urz.net
deny from tekdefense.com
deny from malc0de.com
deny from malwareblacklist.com
deny from minotauranalysis.com
deny from Sacour.cn
deny from scoop.it
deny from tencent.com
deny from spyeyetracker.abuse.ch
deny from abuse.ch
deny from SCUMWARE.org
deny from scumware.org
deny from sophos.com
deny from securebrain.co.jp
deny from quttera.com
deny from hosts-file.net
deny from amada.abuse.ch
deny from palevotracker.abuse.ch
deny from blogger.com
deny from phishtank.com
deny from netcraft.com
deny from google.com
deny from yahoo.com
deny from malwared.ru
deny from malware.com.br
deny from malekal.com
deny from k7computing.com 
deny from gdata.com
deny from gdatasoftware.com
deny from fortinet.com
deny from emsisoft.com
deny from quttera.com
deny from opera.com
deny from infospyware.com
deny from kaspersky.com        
Deny from 82.165.47.*
Deny from 84.74.14

Deny from 209.185.108

Deny from dclient.hispeed.ch

Deny from 209.185.253

Deny from 209.85.238

Deny from 209.85.238.11

Deny from 209.85.238.4

Deny from 216.239.33.96

Deny from 216.239.33.97

Deny from 216.239.33.98

Deny from 216.239.33.99

Deny from 216.239.37.98

Deny from 216.239.37.99

Deny from 216.239.39.98

Deny from 216.239.39.99

Deny from 216.239.41.96

Deny from 216.239.41.97

Deny from 216.239.41.98

Deny from 216.239.41.99

Deny from 216.239.45.4

Deny from 216.239.46

Deny from 216.239.51.96

Deny from 216.239.51.97

Deny from 216.239.51.98

Deny from 216.239.51.99

Deny from 216.239.53.98

Deny from 216.239.53.99

Deny from 216.239.57.96

Deny from 216.239.57.97

Deny from 216.239.57.98

Deny from 216.239.57.99

Deny from 216.239.59.98

Deny from 216.239.59.99

Deny from 216.33.229.163

Deny from 64.233.173.193

Deny from 64.233.173.194

Deny from 64.233.173.195

Deny from 64.233.173.196

Deny from 64.233.173.197

Deny from 64.233.173.198

Deny from 64.233.173.199

Deny from 64.233.173.200

Deny from 64.233.173.201

Deny from 64.233.173.202

Deny from 64.233.173.203

Deny from 64.233.173.204

Deny from 64.233.173.205

Deny from 64.233.173.206

Deny from 64.233.173.207

Deny from 64.233.173.208

Deny from 64.233.173.209

Deny from 64.233.173.210

Deny from 64.233.173.211

Deny from 64.233.173.212

Deny from 64.233.173.213

Deny from 64.233.173.214

Deny from 64.233.173.215

Deny from 64.233.173.216

Deny from 64.233.173.217

Deny from 64.233.173.218

Deny from 64.233.173.219

Deny from 64.233.173.220

Deny from 64.233.173.221

Deny from 64.233.173.222

Deny from 64.233.173.223

Deny from 64.233.173.224

Deny from 64.233.173.225

Deny from 64.233.173.226

Deny from 64.233.173.227

Deny from 64.233.173.228

Deny from 64.233.173.229

Deny from 64.233.173.230

Deny from 64.233.173.231

Deny from 64.233.173.232

Deny from 64.233.173.233

Deny from 64.233.173.234

Deny from 64.233.173.235

Deny from 64.233.173.236

Deny from 64.233.173.237

Deny from 64.233.173.238

Deny from 64.233.173.239

Deny from 64.233.173.240

Deny from 64.233.173.241

Deny from 64.233.173.242

Deny from 64.233.173.243

Deny from 64.233.173.244

Deny from 64.233.173.245

Deny from 64.233.173.246

Deny from 64.233.173.247

Deny from 64.233.173.248

Deny from 64.233.173.249

Deny from 64.233.173.250

Deny from 64.233.173.251

Deny from 64.233.173.252

Deny from 64.233.173.253

Deny from 64.233.173.254

Deny from 64.233.173.255

Deny from 64.68.80

Deny from 64.68.81

Deny from 64.68.82

Deny from 64.68.83

Deny from 64.68.84

Deny from 64.68.85

Deny from 64.68.86

Deny from 64.68.87

Deny from 64.68.88

Deny from 64.68.89

Deny from 64.68.90.1

Deny from 64.68.90.10

Deny from 64.68.90.11

Deny from 64.68.90.12

Deny from 64.68.90.129

Deny from 64.68.90.13

Deny from 64.68.90.130

Deny from 64.68.90.131

Deny from 64.68.90.132

Deny from 64.68.90.133

Deny from 64.68.90.134

Deny from 64.68.90.135

Deny from 64.68.90.136

Deny from 64.68.90.137

Deny from 64.68.90.138

Deny from 64.68.90.139

Deny from 64.68.90.14

Deny from 64.68.90.140

Deny from 64.68.90.141

Deny from 64.68.90.142

Deny from 64.68.90.143

Deny from 64.68.90.144

Deny from 64.68.90.145

Deny from 64.68.90.146

Deny from 64.68.90.147

Deny from 64.68.90.148

Deny from 64.68.90.149

Deny from 64.68.90.15

Deny from 64.68.90.150

Deny from 64.68.90.151

Deny from 64.68.90.152

Deny from 64.68.90.153

Deny from 64.68.90.154

Deny from 64.68.90.155

Deny from 64.68.90.156

Deny from 64.68.90.157

Deny from 64.68.90.158

Deny from 64.68.90.159

Deny from 64.68.90.16

Deny from 64.68.90.160

Deny from 64.68.90.161

Deny from 64.68.90.162

Deny from 64.68.90.163

Deny from 64.68.90.164

Deny from 64.68.90.165

Deny from 64.68.90.166

Deny from 64.68.90.167

Deny from 64.68.90.168

Deny from 64.68.90.169

Deny from 64.68.90.17

Deny from 64.68.90.170

Deny from 64.68.90.171

Deny from 64.68.90.172

Deny from 64.68.90.173

Deny from 64.68.90.174

Deny from 64.68.90.175

Deny from 64.68.90.176

Deny from 64.68.90.177

Deny from 64.68.90.178

Deny from 64.68.90.179

Deny from 64.68.90.18

Deny from 64.68.90.180

Deny from 64.68.90.181

Deny from 64.68.90.182

Deny from 64.68.90.183

Deny from 64.68.90.184

Deny from 64.68.90.185

Deny from 64.68.90.186

Deny from 64.68.90.187

Deny from 64.68.90.188

Deny from 64.68.90.189

Deny from 64.68.90.19

Deny from 64.68.90.190

Deny from 64.68.90.191

Deny from 64.68.90.192

Deny from 64.68.90.193

Deny from 64.68.90.194

Deny from 64.68.90.195

Deny from 64.68.90.196

Deny from 64.68.90.197

Deny from 64.68.90.198

Deny from 64.68.90.199

Deny from 64.68.90.2

Deny from 64.68.90.20

Deny from 64.68.90.200

Deny from 64.68.90.201

Deny from 64.68.90.202

Deny from 64.68.90.203

Deny from 64.68.90.204

Deny from 64.68.90.205

Deny from 64.68.90.206

Deny from 64.68.90.207

Deny from 64.68.90.208

Deny from 64.68.90.21

Deny from 64.68.90.22

Deny from 64.68.90.23

Deny from 64.68.90.24

Deny from 64.68.90.25

Deny from 64.68.90.26

Deny from 64.68.90.27

Deny from 64.68.90.28

Deny from 64.68.90.29

Deny from 64.68.90.3

Deny from 64.68.90.30

Deny from 64.68.90.31

Deny from 64.68.90.32

Deny from 64.68.90.33

Deny from 64.68.90.34

Deny from 64.68.90.35

Deny from 64.68.90.36

Deny from 64.68.90.37

Deny from 64.68.90.38

Deny from 64.68.90.39

Deny from 64.68.90.4

Deny from 64.68.90.40

Deny from 64.68.90.41

Deny from 64.68.90.42

Deny from 64.68.90.43

Deny from 64.68.90.44

Deny from 64.68.90.45

Deny from 64.68.90.46

Deny from 64.68.90.47

Deny from 64.68.90.48

Deny from 64.68.90.49

Deny from 64.68.90.5

Deny from 64.68.90.50

Deny from 64.68.90.51

Deny from 64.68.90.52

Deny from 64.68.90.53

Deny from 64.68.90.54

Deny from 64.68.90.55

Deny from 64.68.90.56

Deny from 64.68.90.57

Deny from 64.68.90.58

Deny from 64.68.90.59

Deny from 64.68.90.6

Deny from 64.68.90.60

Deny from 64.68.90.61

Deny from 64.68.90.62

Deny from 64.68.90.63

Deny from 64.68.90.64

Deny from 64.68.90.65

Deny from 64.68.90.66

Deny from 64.68.90.67

Deny from 64.68.90.68

Deny from 64.68.90.69

Deny from 64.68.90.7

Deny from 64.68.90.70

Deny from 64.68.90.71

Deny from 64.68.90.72

Deny from 64.68.90.73

Deny from 64.68.90.74

Deny from 64.68.90.75

Deny from 64.68.90.76

Deny from 64.68.90.77

Deny from 64.68.90.78

Deny from 64.68.90.79

Deny from 64.68.90.8

Deny from 64.68.90.80

Deny from 64.68.90.9

Deny from 64.68.91

Deny from 64.68.92

Deny from 66.249.64

Deny from 66.249.65

Deny from 66.249.66

Deny from 66.249.67

Deny from 66.249.68

Deny from 66.249.69

Deny from 66.249.70

Deny from 66.249.71

Deny from 66.249.72

Deny from 66.249.73

Deny from 66.249.78

Deny from 66.249.79

Deny from 72.14.199

Deny from 8.6.48

Deny from 141.185.209

Deny from 169.207.238

Deny from 199.177.18.9

Deny from 202.160.178

Deny from 202.160.179

Deny from 202.160.180

Deny from 202.160.181

Deny from 202.160.183.182

Deny from 202.160.183.217

Deny from 202.160.183.218

Deny from 202.160.183.219

Deny from 202.160.183.220

Deny from 202.160.183.235

Deny from 202.160.183.239

Deny from 202.160.183.245

Deny from 202.160.185.174

Deny from 202.165.96.142

Deny from 202.165.98

Deny from 202.165.99

Deny from 202.212.5.30

Deny from 202.212.5.32

Deny from 202.212.5.33

Deny from 202.212.5.34

Deny from 202.212.5.35

Deny from 202.212.5.36

Deny from 202.212.5.37

Deny from 202.212.5.38

Deny from 202.212.5.39

Deny from 202.212.5.47

Deny from 202.212.5.48

Deny from 202.46.19.93

Deny from 203.123.188.2

Deny from 203.141.52.41

Deny from 203.141.52.42

Deny from 203.141.52.43

Deny from 203.141.52.44

Deny from 203.141.52.45

Deny from 203.141.52.46

Deny from 203.141.52.47

Deny from 203.255.234.102

Deny from 203.255.234.103

Deny from 203.255.234.105

Deny from 203.255.234.106

Deny from 206.190.43.125

Deny from 206.190.43.81

Deny from 207.126.239.224

Deny from 209.1.12

Deny from 209.1.13.101

Deny from 209.1.13.231

Deny from 209.1.13.232

Deny from 209.1.32.122

Deny from 209.1.38

Deny from 209.131.40

Deny from 209.131.41

Deny from 209.131.48

Deny from 209.131.49.37

Deny from 209.131.50.153

Deny from 209.131.51.166

Deny from 209.131.60.169

Deny from 209.131.60.170

Deny from 209.131.60.171

Deny from 209.131.60.19

Deny from 209.131.62.107

Deny from 209.131.62.108

Deny from 209.131.62.109

Deny from 209.131.62.214

Deny from 209.185.122

Deny from 209.185.141

Deny from 209.185.143

Deny from 209.191.123.33

Deny from 209.191.64.227

Deny from 209.191.65

Deny from 209.191.65.249

Deny from 209.191.65.82

Deny from 209.191.82.245

Deny from 209.191.82.252

Deny from 209.191.83

Deny from 209.67.206.126

Deny from 209.67.206.127

Deny from 209.67.206.133

Deny from 209.73.176.128

Deny from 209.73.176.129

Deny from 209.73.176.133

Deny from 209.73.176.134

Deny from 209.73.176.136

Deny from 211.14.8.240

Deny from 211.169.241.21

Deny from 213.216.143.37

Deny from 213.216.143.38

Deny from 213.216.143.39

Deny from 216.109.121.70

Deny from 216.109.121.71

Deny from 216.109.126.131

Deny from 216.109.126.133

Deny from 216.109.126.137

Deny from 216.109.126.138

Deny from 216.109.126.139

Deny from 216.109.126.141

Deny from 216.109.126.143

Deny from 216.109.126.145

Deny from 216.109.126.146

Deny from 216.109.126.147

Deny from 216.109.126.150

Deny from 216.109.126.152

Deny from 216.109.126.157

Deny from 216.109.126.158

Deny from 216.109.126.159

Deny from 216.109.126.160

Deny from 216.109.126.161

Deny from 216.136.233.164

Deny from 216.145.58.219

Deny from 216.155.198.60

Deny from 216.155.200

Deny from 216.155.202.175

Deny from 216.155.202.54

Deny from 216.155.204.40

Deny from 216.239.193.71

Deny from 216.239.193.72

Deny from 216.239.193.73

Deny from 216.239.193.74

Deny from 216.239.193.75

Deny from 216.239.193.76

Deny from 216.239.193.77

Deny from 216.239.193.78

Deny from 216.239.193.79

Deny from 216.239.193.80

Deny from 216.239.193.81

Deny from 216.239.193.82

Deny from 216.239.193.83

Deny from 216.239.193.84

Deny from 216.239.193.85

Deny from 216.239.193.86

Deny from 216.32.237.1

Deny from 216.32.237.10

Deny from 216.32.237.11

Deny from 216.32.237.12

Deny from 216.32.237.13

Deny from 216.32.237.14

Deny from 216.32.237.15

Deny from 216.32.237.16

Deny from 216.32.237.17

Deny from 216.32.237.18

Deny from 216.32.237.19

Deny from 216.32.237.20

Deny from 216.32.237.21

Deny from 216.32.237.22

Deny from 216.32.237.23

Deny from 216.32.237.24

Deny from 216.32.237.25

Deny from 216.32.237.26

Deny from 216.32.237.27

Deny from 216.32.237.28

Deny from 216.32.237.29

Deny from 216.32.237.30

Deny from 216.32.237.7

Deny from 216.32.237.8

Deny from 216.32.237.9

Deny from 62.172.199.20

Deny from 62.172.199.21

Deny from 62.172.199.22

Deny from 62.172.199.23

Deny from 62.172.199.24

Deny from 62.27.59.245

Deny from 63.163.102.180

Deny from 63.163.102.181

Deny from 63.163.102.182

Deny from 64.157.137.219

Deny from 64.157.137.220

Deny from 64.157.137.221

Deny from 64.157.137.225

Deny from 64.157.138.103

Deny from 64.157.138.108

Deny from 64.75.36.42

Deny from 64.75.36.43

Deny from 64.75.36.44

Deny from 64.75.36.45

Deny from 64.75.36.47

Deny from 64.75.36.77

Deny from 64.75.36.79

Deny from 64.75.36.80

Deny from 66.163.170.157

Deny from 66.163.170.159

Deny from 66.163.170.161

Deny from 66.163.170.162

Deny from 66.163.170.166

Deny from 66.163.170.167

Deny from 66.163.170.170

Deny from 66.163.170.172

Deny from 66.163.170.176

Deny from 66.163.170.178

Deny from 66.163.170.179

Deny from 66.163.170.180

Deny from 66.163.170.184

Deny from 66.163.170.185

Deny from 66.163.170.190

Deny from 66.163.170.192

Deny from 66.163.174.65

Deny from 66.196.101

Deny from 66.196.65

Deny from 66.196.67.100

Deny from 66.196.67.101

Deny from 66.196.67.102

Deny from 66.196.67.103

Deny from 66.196.67.104

Deny from 66.196.67.105

Deny from 66.196.67.106

Deny from 66.196.67.107

Deny from 66.196.67.108

Deny from 66.196.67.109

Deny from 66.196.67.110

Deny from 66.196.67.111

Deny from 66.196.67.112

Deny from 66.196.67.113

Deny from 66.196.67.114

Deny from 66.196.67.115

Deny from 66.196.67.116

Deny from 66.196.67.117

Deny from 66.196.67.118

Deny from 66.196.67.119

Deny from 66.196.67.120

Deny from 66.196.67.121

Deny from 66.196.67.122

Deny from 66.196.67.123

Deny from 66.196.67.124

Deny from 66.196.67.125

Deny from 66.196.67.126

Deny from 66.196.67.127

Deny from 66.196.67.128

Deny from 66.196.67.129

Deny from 66.196.67.130

Deny from 66.196.67.150

Deny from 66.196.67.151

Deny from 66.196.67.176

Deny from 66.196.67.177

Deny from 66.196.67.178

Deny from 66.196.67.200

Deny from 66.196.67.201

Deny from 66.196.67.202

Deny from 66.196.67.203

Deny from 66.196.67.204

Deny from 66.196.67.205

Deny from 66.196.67.206

Deny from 66.196.67.207

Deny from 66.196.67.208

Deny from 66.196.67.209

Deny from 66.196.67.210

Deny from 66.196.67.211

Deny from 66.196.67.212

Deny from 66.196.67.213

Deny from 66.196.67.214

Deny from 66.196.67.215

Deny from 66.196.67.216

Deny from 66.196.67.217

Deny from 66.196.67.218

Deny from 66.196.67.219

Deny from 66.196.67.220

Deny from 66.196.67.221

Deny from 66.196.67.222

Deny from 66.196.67.223

Deny from 66.196.67.224

Deny from 66.196.67.225

Deny from 66.196.67.226

Deny from 66.196.67.227

Deny from 66.196.67.228

Deny from 66.196.67.229

Deny from 66.196.67.230

Deny from 66.196.67.231

Deny from 66.196.67.232

Deny from 66.196.67.233

Deny from 66.196.67.234

Deny from 66.196.67.235

Deny from 66.196.67.236

Deny from 66.196.67.237

Deny from 66.196.67.238

Deny from 66.196.67.239

Deny from 66.196.67.240

Deny from 66.196.67.254

Deny from 66.196.67.30

Deny from 66.196.67.31

Deny from 66.196.67.32

Deny from 66.196.67.33

Deny from 66.196.67.34

Deny from 66.196.67.35

Deny from 66.196.67.36

Deny from 66.196.67.37

Deny from 66.196.67.38

Deny from 66.196.67.39

Deny from 66.196.67.70

Deny from 66.196.67.71

Deny from 66.196.67.72

Deny from 66.196.67.73

Deny from 66.196.67.74

Deny from 66.196.67.75

Deny from 66.196.67.76

Deny from 66.196.67.77

Deny from 66.196.67.78

Deny from 66.196.67.79

Deny from 66.196.67.80

Deny from 66.196.67.94

Deny from 66.196.67.95

Deny from 66.196.67.96

Deny from 66.196.67.97

Deny from 66.196.67.98

Deny from 66.196.67.99

Deny from 66.196.72

Deny from 66.196.73

Deny from 66.196.74

Deny from 66.196.77

Deny from 66.196.78

Deny from 66.196.80

Deny from 66.196.81.10

Deny from 66.196.81.102

Deny from 66.196.81.103

Deny from 66.196.81.104

Deny from 66.196.81.105

Deny from 66.196.81.106

Deny from 66.196.81.107

Deny from 66.196.81.108

Deny from 66.196.81.109

Deny from 66.196.81.11

Deny from 66.196.81.110

Deny from 66.196.81.111

Deny from 66.196.81.112

Deny from 66.196.81.113

Deny from 66.196.81.114

Deny from 66.196.81.115

Deny from 66.196.81.116

Deny from 66.196.81.117

Deny from 66.196.81.118

Deny from 66.196.81.119

Deny from 66.196.81.12

Deny from 66.196.81.120

Deny from 66.196.81.121

Deny from 66.196.81.122

Deny from 66.196.81.123

Deny from 66.196.81.124

Deny from 66.196.81.125

Deny from 66.196.81.126

Deny from 66.196.81.127

Deny from 66.196.81.128

Deny from 66.196.81.129

Deny from 66.196.81.13

Deny from 66.196.81.130

Deny from 66.196.81.131

Deny from 66.196.81.132

Deny from 66.196.81.133

Deny from 66.196.81.134

Deny from 66.196.81.135

Deny from 66.196.81.136

Deny from 66.196.81.137

Deny from 66.196.81.138

Deny from 66.196.81.139

Deny from 66.196.81.14

Deny from 66.196.81.140

Deny from 66.196.81.141

Deny from 66.196.81.142

Deny from 66.196.81.143

Deny from 66.196.81.144

Deny from 66.196.81.145

Deny from 66.196.81.146

Deny from 66.196.81.147

Deny from 66.196.81.148

Deny from 66.196.81.149

Deny from 66.196.81.15

Deny from 66.196.81.150

Deny from 66.196.81.151

Deny from 66.196.81.152

Deny from 66.196.81.153

Deny from 66.196.81.154

Deny from 66.196.81.155

Deny from 66.196.81.156

Deny from 66.196.81.157

Deny from 66.196.81.158

Deny from 66.196.81.159

Deny from 66.196.81.16

Deny from 66.196.81.160

Deny from 66.196.81.161

Deny from 66.196.81.162

Deny from 66.196.81.163

Deny from 66.196.81.164

Deny from 66.196.81.165

Deny from 66.196.81.166

Deny from 66.196.81.167

Deny from 66.196.81.168

Deny from 66.196.81.169

Deny from 66.196.81.17

Deny from 66.196.81.170

Deny from 66.196.81.171

Deny from 66.196.81.172

Deny from 66.196.81.173

Deny from 66.196.81.174

Deny from 66.196.81.175

Deny from 66.196.81.176

Deny from 66.196.81.177

Deny from 66.196.81.178

Deny from 66.196.81.179

Deny from 66.196.81.18

Deny from 66.196.81.180

Deny from 66.196.81.181

Deny from 66.196.81.182

Deny from 66.196.81.183

Deny from 66.196.81.184

Deny from 66.196.81.185

Deny from 66.196.81.187

Deny from 66.196.81.188

Deny from 66.196.81.189

Deny from 66.196.81.19

Deny from 66.196.81.190

Deny from 66.196.81.191

Deny from 66.196.81.192

Deny from 66.196.81.193

Deny from 66.196.81.194

Deny from 66.196.81.195

Deny from 66.196.81.196

Deny from 66.196.81.197

Deny from 66.196.81.198

Deny from 66.196.81.199

Deny from 66.196.81.20

Deny from 66.196.81.200

Deny from 66.196.81.201

Deny from 66.196.81.202

Deny from 66.196.81.203

Deny from 66.196.81.204

Deny from 66.196.81.205

Deny from 66.196.81.206

Deny from 66.196.81.207

Deny from 66.196.81.208

Deny from 66.196.81.209

Deny from 66.196.81.21

Deny from 66.196.81.210

Deny from 66.196.81.211

Deny from 66.196.81.212

Deny from 66.196.81.213

Deny from 66.196.81.214

Deny from 66.196.81.215

Deny from 66.196.81.216

Deny from 66.196.81.217

Deny from 66.196.81.218

Deny from 66.196.81.219

Deny from 66.196.81.22

Deny from 66.196.81.23

Deny from 66.196.81.86

Deny from 66.196.81.87

Deny from 66.196.81.88

Deny from 66.196.81.93

Deny from 66.196.81.94

Deny from 66.196.81.95

Deny from 66.196.81.96

Deny from 66.196.90

Deny from 66.196.91

Deny from 66.196.92

Deny from 66.196.93.19

Deny from 66.196.93.24

Deny from 66.196.93.6

Deny from 66.196.93.7

Deny from 66.196.97

Deny from 66.196.99.20

Deny from 66.218.65.52

Deny from 66.218.70

Deny from 66.228.164

Deny from 66.228.165

Deny from 66.228.166

Deny from 66.228.173

Deny from 66.228.182.177

Deny from 66.228.182.183

Deny from 66.228.182.185

Deny from 66.228.182.187

Deny from 66.228.182.188

Deny from 66.228.182.190

Deny from 66.94.230.100

Deny from 66.94.230.101

Deny from 66.94.230.102

Deny from 66.94.230.103

Deny from 66.94.230.104

Deny from 66.94.230.105

Deny from 66.94.230.106

Deny from 66.94.230.107

Deny from 66.94.230.108

Deny from 66.94.230.109

Deny from 66.94.230.110

Deny from 66.94.230.160

Deny from 66.94.230.161

Deny from 66.94.230.162

Deny from 66.94.230.163

Deny from 66.94.230.96

Deny from 66.94.230.97

Deny from 66.94.230.98

Deny from 66.94.230.99

Deny from 66.94.232

Deny from 66.94.233

Deny from 66.94.238.51

Deny from 67.195.115

Deny from 67.195.34

Deny from 67.195.37

Deny from 67.195.44

Deny from 67.195.45

Deny from 67.195.50.87

Deny from 67.195.51

Deny from 67.195.52

Deny from 67.195.53.111

Deny from 67.195.53.219

Deny from 67.195.54

Deny from 67.195.58

Deny from 67.195.98

Deny from 67.195.110

Deny from 67.195.111

Deny from 67.195.112

Deny from 67.195.113

Deny from 67.195.114

Deny from 68.142.195.80

Deny from 68.142.195.81

Deny from 68.142.203.133

Deny from 68.142.211.69

Deny from 68.142.212.197

Deny from 68.142.230.125

Deny from 68.142.230.126

Deny from 68.142.230.127

Deny from 68.142.230.128

Deny from 68.142.230.129

Deny from 68.142.230.130

Deny from 68.142.230.131

Deny from 68.142.230.132

Deny from 68.142.230.133

Deny from 68.142.230.134

Deny from 68.142.230.135

Deny from 68.142.230.136

Deny from 68.142.230.137

Deny from 68.142.230.138

Deny from 68.142.230.139

Deny from 68.142.230.140

Deny from 68.142.230.141

Deny from 68.142.230.142

Deny from 68.142.230.143

Deny from 68.142.230.144

Deny from 68.142.230.145

Deny from 68.142.230.146

Deny from 68.142.230.147

Deny from 68.142.230.148

Deny from 68.142.230.149

Deny from 68.142.230.150

Deny from 68.142.230.151

Deny from 68.142.230.152

Deny from 68.142.230.153

Deny from 68.142.230.154

Deny from 68.142.230.155

Deny from 68.142.230.156

Deny from 68.142.230.157

Deny from 68.142.230.158

Deny from 68.142.230.159

Deny from 68.142.230.160

Deny from 68.142.230.161

Deny from 68.142.230.162

Deny from 68.142.230.163

Deny from 68.142.230.164

Deny from 68.142.230.165

Deny from 68.142.230.166

Deny from 68.142.230.167

Deny from 68.142.230.168

Deny from 68.142.230.169

Deny from 68.142.230.174

Deny from 68.142.230.175

Deny from 68.142.230.176

Deny from 68.142.230.177

Deny from 68.142.230.178

Deny from 68.142.230.179

Deny from 68.142.230.180

Deny from 68.142.230.181

Deny from 68.142.230.182

Deny from 68.142.230.183

Deny from 68.142.230.184

Deny from 68.142.230.185

Deny from 68.142.230.186

Deny from 68.142.230.187

Deny from 68.142.230.188

Deny from 68.142.230.189

Deny from 68.142.230.190

Deny from 68.142.230.191

Deny from 68.142.230.192

Deny from 68.142.230.193

Deny from 68.142.230.194

Deny from 68.142.230.195

Deny from 68.142.230.196

Deny from 68.142.230.197

Deny from 68.142.230.198

Deny from 68.142.230.199

Deny from 68.142.230.200

Deny from 68.142.230.201

Deny from 68.142.230.202

Deny from 68.142.230.203

Deny from 68.142.230.204

Deny from 68.142.230.205

Deny from 68.142.230.206

Deny from 68.142.230.207

Deny from 68.142.230.208

Deny from 68.142.230.209

Deny from 68.142.230.210

Deny from 68.142.230.211

Deny from 68.142.230.212

Deny from 68.142.230.213

Deny from 68.142.230.214

Deny from 68.142.230.215

Deny from 68.142.230.216

Deny from 68.142.230.217

Deny from 68.142.230.240

Deny from 68.142.230.247

Deny from 68.142.230.248

Deny from 68.142.230.249

Deny from 68.142.230.250

Deny from 68.142.230.251

Deny from 68.142.230.252

Deny from 68.142.230.253

Deny from 68.142.230.254

Deny from 68.142.230.32

Deny from 68.142.230.33

Deny from 68.142.230.34

Deny from 68.142.230.35

Deny from 68.142.230.36

Deny from 68.142.230.37

Deny from 68.142.230.38

Deny from 68.142.230.39

Deny from 68.142.230.40

Deny from 68.142.230.41

Deny from 68.142.230.43

Deny from 68.142.230.44

Deny from 68.142.230.45

Deny from 68.142.230.46

Deny from 68.142.230.47

Deny from 68.142.230.48

Deny from 68.142.230.49

Deny from 68.142.231.49

Deny from 68.142.240.106

Deny from 68.142.246

Deny from 68.142.249

Deny from 68.142.250

Deny from 68.142.251

Deny from 68.180.216.111

Deny from 68.180.250

Deny from 68.180.251

Deny from 69.147.79.131

Deny from 69.147.79.137

Deny from 69.147.79.173

Deny from 72.30.101

Deny from 72.30.102

Deny from 72.30.103

Deny from 72.30.104

Deny from 72.30.107

Deny from 72.30.110

Deny from 72.30.111

Deny from 72.30.124.128

Deny from 72.30.124.130

Deny from 72.30.124.134

Deny from 72.30.128

Deny from 72.30.129

Deny from 72.30.131

Deny from 72.30.132

Deny from 72.30.133

Deny from 72.30.134

Deny from 72.30.135

Deny from 72.30.142

Deny from 72.30.142.24

Deny from 72.30.142.25

Deny from 72.30.161

Deny from 72.30.177

Deny from 72.30.179

Deny from 72.30.213.101

Deny from 72.30.214

Deny from 72.30.215

Deny from 72.30.216

Deny from 72.30.221

Deny from 72.30.226

Deny from 72.30.252

Deny from 72.30.54

Deny from 72.30.56

Deny from 72.30.60

Deny from 72.30.61

Deny from 72.30.65

Deny from 72.30.78

Deny from 72.30.79

Deny from 72.30.81

Deny from 72.30.87

Deny from 72.30.9

Deny from 72.30.97

Deny from 72.30.98

Deny from 72.30.99

Deny from 74.6.11

Deny from 74.6.12

Deny from 74.6.13

Deny from 74.6.131

Deny from 74.6.16

Deny from 74.6.17

Deny from 74.6.18

Deny from 74.6.19

Deny from 74.6.20

Deny from 74.6.21

Deny from 74.6.22

Deny from 74.6.23

Deny from 74.6.24

Deny from 74.6.240

Deny from 74.6.25

Deny from 74.6.26

Deny from 74.6.27

Deny from 74.6.28

Deny from 74.6.29

Deny from 74.6.30

Deny from 74.6.31

Deny from 74.6.65

Deny from 74.6.66

Deny from 74.6.67

Deny from 74.6.68

Deny from 74.6.69

Deny from 74.6.7

Deny from 74.6.70

Deny from 74.6.71

Deny from 74.6.72

Deny from 74.6.73

Deny from 74.6.74

Deny from 74.6.75

Deny from 74.6.76

Deny from 74.6.79

Deny from 74.6.8

Deny from 74.6.85

Deny from 74.6.86

Deny from 74.6.87

Deny from 74.6.9

Deny from 166.48.225.254

Deny from 202.232.118.40

Deny from 202.232.118.51

Deny from 206.79.171

Deny from 207.77.90

Deny from 207.77.91.184

Deny from 208.146.26

Deny from 208.146.27.123

Deny from 208.146.27.124

Deny from 208.146.27.57

Deny from 208.146.27.58

Deny from 208.146.27.59

Deny from 208.146.27.60

Deny from 208.146.27.62

Deny from 208.146.27.89

Deny from 208.146.27.90

Deny from 208.146.27.91

Deny from 208.146.27.92

Deny from 208.146.27.93

Deny from 208.146.27.94

Deny from 208.146.27.95

Deny from 208.146.27.96

Deny from 209.202.192

Deny from 209.202.192.147

Deny from 209.202.193

Deny from 209.202.194.237

Deny from 209.202.194.238

Deny from 209.202.205.1

Deny from 209.202.240.109

Deny from 209.202.240.8

Deny from 209.202.248.211

Deny from 209.202.248.212

Deny from 209.202.248.213

Deny from 209.202.248.214

Deny from 209.67.228

Deny from 209.67.229

Deny from 211.51.63.4

Deny from 213.193.19.35

Deny from 64.89.33

Deny from 195.145.119.24

Deny from 195.145.119.25

Deny from 198.5.208

Deny from 198.5.210

Deny from 202.33.250.146

Deny from 202.33.250.147

Deny from 202.33.250.148

Deny from 202.33.250.149

Deny from 202.33.250.150

Deny from 202.33.250.151

Deny from 202.33.250.152

Deny from 202.33.250.153

Deny from 202.33.250.154

Deny from 204.162.96

Deny from 204.162.97.1

Deny from 204.162.97.152

Deny from 204.162.97.17

Deny from 204.162.97.2

Deny from 204.162.97.205

Deny from 204.162.97.228

Deny from 204.162.97.231

Deny from 204.162.97.3

Deny from 204.162.97.32

Deny from 204.162.98.11

Deny from 204.162.98.12

Deny from 204.162.98.124

Deny from 204.162.98.126

Deny from 204.162.98.151

Deny from 204.162.98.161

Deny from 204.162.98.168

Deny from 204.162.98.18

Deny from 204.162.98.192

Deny from 204.162.98.2

Deny from 204.162.98.237

Deny from 204.162.98.27

Deny from 204.162.98.3

Deny from 204.162.98.36

Deny from 204.162.98.38

Deny from 204.162.98.4

Deny from 204.162.98.45

Deny from 204.162.98.48

Deny from 204.162.98.49

Deny from 204.162.98.5

Deny from 204.162.98.6

Deny from 204.162.98.7

Deny from 204.162.98.8

Deny from 204.162.98.80

Deny from 204.162.98.88

Deny from 204.162.98.9

Deny from 204.162.98.91

Deny from 204.162.98.98

Deny from 204.202.132.19

Deny from 205.226.201

Deny from 205.226.203.186

Deny from 205.226.203.35

Deny from 205.226.203.56

Deny from 205.226.203.62

Deny from 205.226.204.238

Deny from 206.3.30.196

Deny from 206.3.30.250

Deny from 206.3.30.251

Deny from 210.148.160.157

Deny from 210.148.160.163

Deny from 210.148.160.165

Deny from 210.148.160.206

Deny from 210.155.157

Deny from 210.155.159

Deny from 210.236.233.130

Deny from 210.236.233.131

Deny from 210.236.233.132

Deny from 210.236.233.133

Deny from 210.236.233.135

Deny from 210.236.233.136

Deny from 210.236.233.137

Deny from 210.236.233.139

Deny from 210.236.233.150

Deny from 210.236.233.151

Deny from 210.236.233.155

Deny from 210.236.233.160

Deny from 210.236.233.161

Deny from 211.13.222.230

Deny from 211.18.214.194

Deny from 212.185.44.10

Deny from 212.185.44.11

Deny from 212.185.44.12

Deny from 212.185.44.15

Deny from 128.177.243

Deny from 128.177.244.100

Deny from 128.177.244.86

Deny from 194.112.94.250

Deny from 194.112.94.251

Deny from 194.112.94.252

Deny from 194.201.146.1

Deny from 194.201.146.24

Deny from 194.221.84.11

Deny from 194.221.84.15

Deny from 194.221.84.31

Deny from 194.221.84.32

Deny from 194.221.84.33

Deny from 194.221.84.34

Deny from 194.221.84.38

Deny from 194.221.84.39

Deny from 194.221.84.40

Deny from 194.221.84.41

Deny from 194.51.33.72

Deny from 204.123.13.36

Deny from 204.123.13.65

Deny from 204.123.13.66

Deny from 204.123.2

Deny from 204.123.28.10

Deny from 204.123.28.11

Deny from 204.123.28.20

Deny from 204.123.28.21

Deny from 204.123.28.27

Deny from 204.123.28.30

Deny from 204.123.28.31

Deny from 204.123.28.32

Deny from 204.123.28.33

Deny from 204.123.9

Deny from 204.152.190

Deny from 204.152.191

Deny from 205.229.83.18

Deny from 208.185.243.148

Deny from 208.221.32

Deny from 208.221.35.200

Deny from 208.221.35.201

Deny from 208.221.35.202

Deny from 208.221.35.203

Deny from 208.221.35.204

Deny from 208.221.35.205

Deny from 208.221.35.206

Deny from 208.221.35.207

Deny from 209.247.40.246

Deny from 209.73.160.1

Deny from 209.73.160.250

Deny from 209.73.160.254

Deny from 209.73.162

Deny from 209.73.164

Deny from 209.73.174.250

Deny from 209.73.174.251

Deny from 209.73.180

Deny from 212.187.213.171

Deny from 212.187.213.172

Deny from 212.187.213.173

Deny from 212.187.213.174

Deny from 212.187.213.175

Deny from 212.187.226

Deny from 212.187.226.42

Deny from 212.187.226.83

Deny from 212.187.226.84

Deny from 212.187.226.85

Deny from 212.187.226.87

Deny from 212.187.226.88

Deny from 212.187.226.93

Deny from 212.187.226.99

Deny from 212.187.227

Deny from 216.39.48

Deny from 216.39.50

Deny from 216.39.51

Deny from 64.152.75

Deny from 66.17.148.128

Deny from 66.17.148.129

Deny from 66.17.148.130

Deny from 66.17.148.131

Deny from 66.17.148.132

Deny from 66.17.148.133

Deny from 66.17.148.134

Deny from 66.17.148.135

Deny from 66.17.148.136

Deny from 66.17.148.137

Deny from 66.17.148.138

Deny from 66.17.148.139

Deny from 66.17.148.140

Deny from 66.17.148.141

Deny from 66.17.148.142

Deny from 66.17.148.143

Deny from 66.17.148.144

Deny from 66.17.148.145

Deny from 66.17.148.146

Deny from 66.17.148.147

Deny from 66.17.148.148

Deny from 66.17.148.149

Deny from 66.17.148.150

Deny from 66.17.148.151

Deny from 66.17.148.152

Deny from 66.17.148.153

Deny from 66.17.148.154

Deny from 66.17.148.155

Deny from 66.17.148.156

Deny from 66.17.148.157

Deny from 66.17.148.158

Deny from 66.17.148.159

Deny from 66.17.148.160

Deny from 66.17.148.161

Deny from 66.17.148.162

Deny from 66.17.148.163

Deny from 66.17.148.164

Deny from 66.17.148.165

Deny from 66.17.148.166

Deny from 66.17.148.167

Deny from 66.17.148.168

Deny from 66.17.148.169

Deny from 66.17.148.170

Deny from 66.17.148.171

Deny from 66.17.148.172

Deny from 66.17.148.173

Deny from 66.17.148.174

Deny from 66.17.148.175

Deny from 66.17.148.176

Deny from 66.17.148.177

Deny from 66.17.148.178

Deny from 66.17.148.179

Deny from 66.17.148.180

Deny from 66.17.148.181

Deny from 66.17.148.182

Deny from 66.17.148.183

Deny from 66.17.148.184

Deny from 66.17.148.185

Deny from 66.17.148.186

Deny from 66.17.148.187

Deny from 66.17.148.188

Deny from 66.17.148.189

Deny from 66.17.148.190

Deny from 66.17.148.191

Deny from 66.163.170.193

Deny from 198.3.103

Deny from 199.172.148.105

Deny from 199.172.148.11

Deny from 199.172.148.37

Deny from 199.172.149

Deny from 199.172.152.238

Deny from 199.172.152.34

Deny from 199.172.152.54

Deny from 199.172.152.56

Deny from 199.172.152.57

Deny from 199.172.152.95

Deny from 199.172.153.174

Deny from 199.172.153.178

Deny from 199.172.156.168

Deny from 199.172.156.169

Deny from 199.172.156.170

Deny from 199.172.156.219

Deny from 199.172.157.28

Deny from 204.62.245

Deny from 195.228.240.177

Deny from 204.166.111.29

Deny from 205.181.75.130

Deny from 205.181.75.60

Deny from 205.181.75.66

Deny from 205.181.75.75

Deny from 205.181.75.76

Deny from 208.219.77

Deny from 216.34.102

Deny from 216.34.109.190

Deny from 216.34.109.191

Deny from 216.34.109.192

Deny from 64.95.79.195

Deny from 64.95.79.40

Deny from 206.253.217.18

Deny from 82.165.35.184

Deny from 63.222.37.101

Deny from 63.222.37.105

Deny from 195.3.97.3

Deny from 193.110.40.93

Deny from 194.231.30.86

Deny from 194.231.30.87

Deny from 194.231.30.88

Deny from 194.231.30.89

Deny from 194.231.30.90

Deny from 194.231.30.91

Deny from 194.231.30.92

Deny from 194.231.30.93

Deny from 194.231.30.108

Deny from 194.231.30.109

Deny from 194.231.68.166

Deny from 213.203.200.31

Deny from 209.68.2.36

Deny from 194.117.133.180

Deny from 194.231.42.185

Deny from 86.131.209.38

Deny from 86.131.210.252

Deny from 81.155.227.55

Deny from 81.155.227.56

Deny from 217.43.59.146

Deny from 208.204.161.8

Deny from 216.250.141.186

Deny from 207.126.112.254

Deny from 209.120.206.178

Deny from 212.91.134.190

Deny from 216.178.189.230

Deny from 130.225.20.4

Deny from 64.247.218.197

Deny from 81.209.140.139

Deny from 140.142.13.196

Deny from 194.231.30.14

Deny from 194.231.0.71

Deny from 194.231.30.11

Deny from 195.37.68.3

Deny from 195.37.68.65

Deny from 195.37.68.180

Deny from 195.37.68.181

Deny from 209.239.48.69

Deny from 213.229.153.170

Deny from 217.113.244.118

Deny from 217.113.244.119

Deny from 194.231.42.178

Deny from 167.160.195.61

Deny from 80.16.145.187

Deny from 64.246.36.123

Deny from 134.96.1.195

Deny from 134.96.7.93

Deny from 134.96.68.36

Deny from 134.96.104.5

Deny from 134.96.104.23

Deny from 134.96.104.83

Deny from 134.96.104.109

Deny from 134.96.104.225

Deny from 134.96.104.226

Deny from 134.96.104.227

Deny from 62.210.155.50

Deny from 62.210.155.56

Deny from 62.210.155.58

Deny from 62.210.155.59

Deny from 208.78.102.219

Deny from 216.240.143.30

Deny from 192.41.9.30

Deny from 208.237.120.82

Deny from 194.67.18.84

Deny from 194.67.18.70

Deny from 194.67.18.65

Deny from 194.67.18.69

Deny from 194.67.18.68

Deny from 194.67.18.67

Deny from 194.67.18.66

Deny from 194.67.18.63

Deny from 194.67.18.71

Deny from 194.67.18.72

Deny from 194.67.18.73

Deny from 194.67.18.74

Deny from 195.210.89.11

Deny from 195.210.91.24

Deny from 195.210.91.80

Deny from 195.210.91.112

Deny from 195.210.91.113

Deny from 195.210.91.187

Deny from 195.210.91.212

Deny from 195.210.91.213

Deny from 195.210.91.214

Deny from 195.210.91.235

Deny from 195.210.91.215

Deny from 192.92.126.4

Deny from 192.92.126.5

Deny from 140.239.126.13

Deny from 140.239.251.220

Deny from 140.239.251.221

Deny from 140.239.251.222

Deny from 140.239.251.223

Deny from 140.239.251.224

Deny from 140.239.251.230

Deny from 206.80.1.253

Deny from 207.204.132.233

Deny from 207.204.132.234

Deny from 208.178.104.55

Deny from 209.67.252.197

Deny from 209.67.252.199

Deny from 209.67.252.211

Deny from 209.67.252.212

Deny from 209.67.252.213

Deny from 209.67.252.214

Deny from 209.67.252.215

Deny from 209.67.252.216

Deny from 210.51.25.142

Deny from 211.13.230.249

Deny from 216.143.191.131

Deny from 216.200.130.20

Deny from 216.200.130.200

Deny from 216.200.130.201

Deny from 216.200.130.202

Deny from 216.200.130.203

Deny from 216.200.130.204

Deny from 216.200.130.205

Deny from 216.200.130.206

Deny from 216.200.130.207

Deny from 216.200.130.208

Deny from 216.200.130.209

Deny from 216.200.130.210

Deny from 216.200.130.242

Deny from 216.200.130.244

Deny from 216.200.130.245

Deny from 216.200.130.246

Deny from 216.200.130.248

Deny from 216.200.130.249

Deny from 216.200.130.26

Deny from 216.200.130.77

Deny from 216.200.130.78

Deny from 216.200.130.79

Deny from 216.200.130.85

Deny from 216.200.130.86

Deny from 216.200.130.87

Deny from 216.200.130.88

Deny from 216.200.130.89

Deny from 216.34.121.100

Deny from 216.34.121.18

Deny from 216.34.121.19

Deny from 216.34.121.31

Deny from 216.34.121.32

Deny from 216.34.121.33

Deny from 216.34.121.34

Deny from 216.34.121.67

Deny from 216.34.121.68

Deny from 63.123.238.50

Deny from 63.123.238.54

Deny from 63.123.238.8

Deny from 63.236.92.143

Deny from 63.236.92.144

Deny from 63.236.92.145

Deny from 63.236.92.146

Deny from 63.236.92.147

Deny from 63.236.92.148

Deny from 63.236.92.149

Deny from 63.236.92.150

Deny from 63.236.92.151

Deny from 63.236.92.152

Deny from 63.236.92.153

Deny from 64.55.148.3

Deny from 64.55.148.37

Deny from 64.55.148.38

Deny from 64.55.148.39

Deny from 64.55.148.4

Deny from 64.55.148.43

Deny from 64.55.148.44

Deny from 64.55.148.45

Deny from 64.55.148.5

Deny from 64.55.148.50

Deny from 64.55.148.51

Deny from 64.55.148.52

Deny from 64.55.148.53

Deny from 64.55.148.54

Deny from 65.119.214.9

Deny from 65.192.195.0

Deny from 65.192.195.1

Deny from 65.192.195.10

Deny from 65.192.195.11

Deny from 65.192.195.12

Deny from 65.192.195.13

Deny from 65.192.195.14

Deny from 65.192.195.15

Deny from 65.192.195.16

Deny from 65.192.195.17

Deny from 65.192.195.18

Deny from 65.192.195.19

Deny from 65.192.195.2

Deny from 65.192.195.20

Deny from 65.192.195.21

Deny from 65.192.195.22

Deny from 65.192.195.23

Deny from 65.192.195.24

Deny from 65.192.195.25

Deny from 65.192.195.26

Deny from 65.192.195.27

Deny from 65.192.195.28

Deny from 65.192.195.29

Deny from 65.192.195.3

Deny from 65.192.195.30

Deny from 65.192.195.31

Deny from 65.192.195.4

Deny from 65.192.195.5

Deny from 65.192.195.6

Deny from 65.192.195.7

Deny from 65.192.195.8

Deny from 65.192.195.9

Deny from 65.214.32

Deny from 65.214.36

Deny from 65.214.38

Deny from 65.214.44

Deny from 65.214.45

Deny from 66.235.124

Deny from 216.55.159.187

Deny from 216.55.159.189

Deny from 216.55.159.190

Deny from 62.141.54.115

Deny from 65.254.63.154

Deny from 69.57.157.54

Deny from 171.64.68.80

Deny from 171.64.75.100

Deny from 171.64.75.104

Deny from 119.63.193.39

Deny from 122.152.128.10

Deny from 122.152.128.19

Deny from 122.152.128.48

Deny from 122.152.129.10

Deny from 122.152.129.9

Deny from 123.125.64.38

Deny from 123.125.64.49

Deny from 162.105.207.185

Deny from 162.105.207.192

Deny from 202.103.134.196

Deny from 202.108.11.106

Deny from 202.108.11.108

Deny from 202.108.11.132

Deny from 202.108.22.70

Deny from 202.108.22.73

Deny from 202.108.22.75

Deny from 202.108.22.79

Deny from 202.108.22.80

Deny from 202.108.22.81

Deny from 202.108.23.71

Deny from 202.108.23.74

*/

/*

Deny from 202.108.249.176

Deny from 202.108.249.177

Deny from 202.108.249.178

Deny from 202.108.249.179

Deny from 202.108.249.182

Deny from 202.108.249.183

Deny from 202.108.249.184

Deny from 202.108.249.185

Deny from 202.108.249.186

Deny from 202.108.249.187

Deny from 202.108.249.188

Deny from 202.108.249.189

Deny from 202.108.249.190

Deny from 202.108.250.195

Deny from 202.108.250.196

Deny from 202.108.250.197

Deny from 202.108.250.198

Deny from 202.108.250.199

Deny from 202.108.250.206

Deny from 202.108.250.207

Deny from 202.108.250.226

Deny from 202.108.250.241

Deny from 202.108.250.242

Deny from 202.108.250.243

Deny from 202.108.250.244

Deny from 202.108.250.253

Deny from 211.100.24.90

Deny from 211.100.24.91

Deny from 211.100.24.92

Deny from 211.100.24.93

Deny from 211.100.24.94

Deny from 211.100.24.95

Deny from 211.100.24.96

Deny from 211.100.24.97

Deny from 211.100.25.196

Deny from 211.100.25.197

Deny from 211.100.25.198

Deny from 211.100.25.199

Deny from 211.100.25.200

Deny from 211.100.25.202

Deny from 211.100.25.204

Deny from 211.101.48.53

Deny from 220.181.7

Deny from 220.181.32.22

Deny from 220.181.32.52

Deny from 220.181.38.169

Deny from 220.181.38.179

Deny from 220.181.38.191

Deny from 60.28.17.36

Deny from 60.28.17.39

Deny from 60.28.17.41

Deny from 60.28.17.43

Deny from 60.28.17.45

Deny from 60.28.17.47

Deny from 61.135.145.204

Deny from 61.135.145.207

Deny from 61.135.145.208

Deny from 61.135.145.209

Deny from 61.135.145.211

Deny from 61.135.145.212

Deny from 61.135.145.215

Deny from 61.135.145.216

Deny from 61.135.145.219

Deny from 61.135.145.221

Deny from 61.135.145.251

Deny from 61.135.146.197

Deny from 61.135.146.199

Deny from 61.135.146.200

Deny from 61.135.146.201

Deny from 61.135.146.202

Deny from 61.135.146.205

Deny from 61.135.146.205

Deny from 61.135.146.206

Deny from 61.135.146.210

Deny from 61.135.146.251

Deny from 61.135.162.204

Deny from 61.135.162.51

Deny from 61.135.162.78

Deny from 61.135.166.102

Deny from 61.135.166.205

Deny from 61.135.166.229

Deny from 61.135.168

Deny from 61.135.190

Deny from 61.149.2.221

Deny from 204.251.93.10

Deny from 64.124.85

Deny from 69.111.170.194

Deny from 208.28.152.71

Deny from 72.3.246.162

Deny from 216.130.179.196

Deny from 72.0.207.162

Deny from 216.58.87.217

Deny from 212.174.130.116

Deny from 212.174.130.118

Deny from 212.174.130.123

Deny from 212.174.130.99

Deny from 194.198.230.36

Deny from 210.159.73.36

Deny from 210.159.73.35

Deny from 194.231.30.106

Deny from 194.231.30.107

Deny from 194.231.30.108

Deny from 216.148.212.182

Deny from 129.241.104.168

Deny from 129.241.104.173

Deny from 129.241.104.174

Deny from 129.241.104.175

Deny from 129.241.104.179

Deny from 129.241.104.180

Deny from 129.241.104.182

Deny from 129.241.104.183

Deny from 129.241.104.184

Deny from 129.241.104.185

Deny from 129.241.104.186

Deny from 129.241.104.187

Deny from 129.241.104.188

Deny from 129.241.104.189

Deny from 129.241.104.238

Deny from 129.241.104.242

Deny from 129.241.50.32

Deny from 129.241.50.33

Deny from 129.241.50.34

Deny from 129.241.50.35

Deny from 193.71.105.251

Deny from 213.179.39.227

Deny from 213.179.58.54

Deny from 217.118.34.110

Deny from 217.118.38.226

Deny from 217.118.38.227

Deny from 217.118.38.228

Deny from 217.118.38.229

Deny from 217.118.38.230

Deny from 217.118.38.231

Deny from 217.118.38.232

Deny from 217.118.38.233

Deny from 217.118.38.234

Deny from 24.68.149.78

Deny from 24.97.214.158

Deny from 62.101.246.77

Deny from 62.97.196.2

Deny from 80.202.209.74

Deny from 80.202.219.29

Deny from 80.202.221.109

Deny from 80.202.58.101

Deny from 80.203.138.137

Deny from 80.203.232.107

Deny from 80.203.26.148

Deny from 80.203.32.41

Deny from 80.203.51.157

Deny from 80.239.62.203

Deny from 81.0.183.106

Deny from 81.0.183.107

Deny from 81.191.108.59

Deny from 81.191.110.86

Deny from 81.191.68.135

Deny from 83.108.128.168

Deny from 83.108.143.229

Deny from 84.48.35.246

Deny from 84.48.78.80

Deny from 151.189.96.99

Deny from 134.93.7.97

Deny from 134.93.7.98

Deny from 64.57.64.90

Deny from 200.215.16.125

Deny from 84.128.33.71

Deny from 84.150.79.18

Deny from 84.150.122.26

Deny from 217.235.240.139

Deny from 217.235.241.160

Deny from 81.86.128.112

Deny from 88.107.17.230

Deny from 64.34.172.78

Deny from 64.34.176.199

Deny from 64.34.179.137

Deny from 131.188.128.229

Deny from 194.199.4.2

Deny from 207.44.220.53

Deny from 213.29.7.220

Deny from 213.29.7.217

Deny from 62.84.131.137

Deny from 62.84.131.161

Deny from 62.84.131.158

Deny from 62.168.111.19

Deny from 62.168.111.21

Deny from 192.115.137.202

Deny from 192.115.136.15

Deny from 64.28.94.71

Deny from 61.16.132.197

Deny from 198.138.63.1

Deny from 198.138.63.22

Deny from 198.139.155.10

Deny from 209.249.80.231

Deny from 209.249.80.232

Deny from 209.249.80.233

Deny from 209.249.80.245

Deny from 209.249.80.246

Deny from 209.10.61.5

Deny from 130.235.86.152

Deny from 195.76.40.251

Deny from 66.47.255.121

Deny from 63.241.61.39

Deny from 63.241.61.43

Deny from 63.241.61.46

Deny from 63.241.61.7

Deny from 63.241.61.8

Deny from 216.143.233.35

Deny from 80.182.226.190

Deny from 195.20.224.72

Deny from 195.20.224.73

Deny from 66.235.180.244

Deny from 143.89.40.159

Deny from 208.36.144.10

Deny from 208.36.144.6

Deny from 208.36.144.7

Deny from 208.36.144.8

Deny from 208.36.144.9

Deny from 216.129.119.10

Deny from 216.129.119.11

Deny from 216.129.119.12

Deny from 216.129.119.13

Deny from 216.129.119.14

Deny from 216.129.119.15

Deny from 216.129.119.16

Deny from 216.129.119.17

Deny from 216.129.119.18

Deny from 216.129.119.19

Deny from 216.129.119.40

Deny from 216.129.119.41

Deny from 216.129.119.42

Deny from 216.129.119.43

Deny from 216.129.119.44

Deny from 216.129.119.45

Deny from 216.129.119.46

Deny from 216.129.119.47

Deny from 216.129.119.48

Deny from 216.129.119.49

Deny from 216.129.119.81

Deny from 38.99.13.116

Deny from 38.99.13.117

Deny from 38.99.13.118

Deny from 38.99.13.119

Deny from 38.99.13.120

Deny from 38.99.13.121

Deny from 38.99.13.122

Deny from 38.99.13.123

Deny from 38.99.13.124

Deny from 38.99.13.125

Deny from 38.99.13.126

Deny from 38.99.44.101

Deny from 38.99.44.102

Deny from 38.99.44.103

Deny from 38.99.44.104

Deny from 38.99.44.105

Deny from 38.99.44.106

Deny from 38.99.44.107

Deny from 38.99.44.108

Deny from 64.1.215.162

Deny from 64.1.215.163

Deny from 64.1.215.164

Deny from 64.1.215.165

Deny from 64.1.215.166

Deny from 67.218.116.132

Deny from 67.218.116.134

Deny from 67.218.116.162

Deny from 192.41.34.245

Deny from 192.41.43.146

Deny from 192.41.49.235

Deny from 82.235.118.155

Deny from 213.246.36.238

Deny from 68.232.134.231

Deny from 69.168.43.89

Deny from 208.185.131.219

Deny from 208.185.131.220

Deny from 208.185.131.221

Deny from 208.185.131.222

Deny from 216.200.195.53

Deny from 216.200.195.58

Deny from 216.200.195.60

Deny from 216.200.195.57

Deny from 216.200.195.59

Deny from 216.200.195.61

Deny from 62.212.117.198

Deny from 213.41.128.47

Deny from 213.251.136.94

Deny from 217.160.94.14

Deny from 66.77.127.85

Deny from 66.77.127.102

Deny from 217.146.97.27

Deny from 210.199.215.54

Deny from 210.233.67.132

Deny from 38.118.73.250

Deny from 68.167.196.88

Deny from 68.239.122.138

Deny from 151.200.115.249

Deny from 213.215.160.170

Deny from 210.16.10.40

Deny from 208.186.202.21

Deny from 62.57.74.14

Deny from 207.31.251.140

Deny from 81.153.61.72

Deny from 81.153.62.103

Deny from 193.15.210.29

Deny from 62.13.25.201

Deny from 62.13.25.209

Deny from 62.13.25.219

Deny from 62.13.25.220

Deny from 62.13.25.221

Deny from 62.13.25.222

Deny from 88.131.106.10

Deny from 88.131.106.16

Deny from 88.131.106.11

Deny from 88.131.106.6

Deny from 88.131.153.91

Deny from 89.150.197.134

Deny from 89.150.197.138

Deny from 89.150.197.142

Deny from 89.150.197.144

Deny from 89.150.197.192

Deny from 89.150.197.193

Deny from 89.150.197.194

Deny from 70.169.191.4

Deny from 71.102.140.247

Deny from 42.142.128.210

Deny from 133.9.238.71

Deny from 136.187.19.99

Deny from 210.128.142.42

Deny from 209.198.242.61

Deny from 194.231.76.158

Deny from 194.168.54.6

Deny from 194.168.54.11

Deny from 195.95.124.3

Deny from 195.95.124.7

Deny from 212.209.54.40

Deny from 212.209.54.134

Deny from 195.242.46.55

Deny from 66.249.26.98

Deny from 206.51.232.142

Deny from 207.36.47.237

Deny from 216.110.167.157

Deny from 69.9.181.169

Deny from 69.9.181.170

Deny from 69.9.181.171

Deny from 64.81.121.37

Deny from 69.44.159.54

Deny from 84.233.148.5

Deny from 84.233.148.7

Deny from 84.233.148.10

Deny from 84.233.148.11

Deny from 84.233.148.12

Deny from 84.233.148.13

Deny from 84.233.148.14

Deny from 84.233.148.15

Deny from 84.233.148.16

Deny from 84.233.148.17

Deny from 84.233.148.18

Deny from 84.233.148.19

Deny from 84.233.148.20

Deny from 84.233.148.21

Deny from 84.233.148.22

Deny from 84.233.148.23

Deny from 84.233.148.24

Deny from 193.47.80.101

Deny from 193.47.80.135

Deny from 193.47.80.136

Deny from 193.47.80.140

Deny from 193.47.80.142

Deny from 193.47.80.36

Deny from 193.47.80.37

Deny from 193.47.80.38

Deny from 193.47.80.39

Deny from 193.47.80.40

Deny from 193.47.80.41

Deny from 193.47.80.42

Deny from 193.47.80.43

Deny from 193.47.80.44

Deny from 193.47.80.46

Deny from 193.47.80.75

Deny from 193.47.80.77

Deny from 193.47.80.78

Deny from 193.47.80.83

Deny from 193.47.80.94

Deny from 195.154.174.164

Deny from 195.154.174.167

Deny from 212.234.111.157

Deny from 213.174.84.195

Deny from 209.67.252.214

Deny from 64.14.66.11

Deny from 64.14.66.100

Deny from 146.101.142.222

Deny from 146.101.142.223

Deny from 146.101.142.224

Deny from 146.101.142.225

Deny from 146.101.142.226

Deny from 146.101.142.227

Deny from 146.101.142.228

Deny from 146.101.142.229

Deny from 146.101.142.230

Deny from 146.101.142.231

Deny from 146.101.142.232

Deny from 146.101.142.233

Deny from 146.101.142.234

Deny from 146.101.142.235

Deny from 146.101.142.236

Deny from 146.101.142.237

Deny from 146.101.142.238

Deny from 146.101.142.239

Deny from 146.101.142.240

Deny from 146.101.142.241

Deny from 146.101.142.242

Deny from 146.101.142.243

Deny from 146.101.142.244

Deny from 146.101.142.245

Deny from 146.101.142.246

Deny from 146.101.142.247

Deny from 146.101.142.248

Deny from 146.101.142.249

Deny from 146.101.142.250

Deny from 146.101.142.251

Deny from 146.101.142.252

Deny from 146.101.142.253

Deny from 151.138.18.30

Deny from 151.138.18.35

Deny from 194.224.199.46

Deny from 194.224.199.48

Deny from 200.221.10.240

Deny from 207.201.123.246

Deny from 208.186.202.28

Deny from 209.202.148

Deny from 209.67.247

Deny from 212.48.8.142

Deny from 212.48.11.189

Deny from 213.188.8.2

Deny from 213.188.8.4

Deny from 213.188.8.76

Deny from 216.35.112.141

Deny from 216.35.112.142

Deny from 216.35.112.143

Deny from 216.35.112.50

Deny from 216.35.112.51

Deny from 62.41.154

Deny from 64.41.254.23

Deny from 64.41.254.24

Deny from 64.41.254.25

Deny from 66.77.73

Deny from 66.77.74

Deny from 70.42.51.10

Deny from 68.94.95.150

Deny from 69.148.183.12

Deny from 69.150.87.183

Deny from 69.152.88.32

Deny from 69.154.219.28

Deny from 69.155.4.253

Deny from 192.41.15.30

Deny from 64.29.182.10

Deny from 207.86.79.6

Deny from 207.86.79.12

Deny from 207.153.57.51

Deny from 193.7.255.21

Deny from 193.7.255.33

Deny from 193.7.255.90

Deny from 193.7.255.121

Deny from 193.7.255.122

Deny from 193.7.255.130

Deny from 193.7.255.142

Deny from 193.7.255.22

Deny from 193.7.255.241

Deny from 193.7.255.242

Deny from 193.7.255.244

Deny from 63.121.41.166

Deny from 63.121.41.172

Deny from 63.121.41.173

Deny from 63.121.41.174

Deny from 63.121.41.176

Deny from 63.121.41.177

Deny from 208.131.25.166

Deny from 208.131.25.167

Deny from 208.131.25.169

Deny from 198.173.35.169

Deny from 198.173.35.170

Deny from 198.173.35.171

Deny from 63.121.41.175

Deny from 131.155.70.189

Deny from 195.190.21.70

Deny from 84.13.2.175

Deny from 84.13.26.47

Deny from 84.13.56.131

Deny from 89.240.138.167

Deny from 132.218.30.21

Deny from 205.179.93.2

Deny from 205.179.93.6

Deny from 151.196.224.70

Deny from 209.176.27.63

Deny from 64.208.104.2

Deny from 203.21.15.10

Deny from 24.17.40.70

Deny from 24.17.41.36

Deny from 24.19.147.118

Deny from 208.131.25.6

Deny from 216.206.178.81

Deny from 216.206.178.83

Deny from 216.206.178.85

Deny from 208.131.25.168

Deny from 63.121.41.178

Deny from 63.121.41.179

Deny from 194.46.8.25

Deny from 64.5.245.10

Deny from 64.5.245.11

Deny from 64.5.245.23

Deny from 64.5.245.24

Deny from 64.5.245.25

Deny from 64.5.245.26

Deny from 64.5.245.27

Deny from 64.5.245.28

Deny from 64.5.245.29

Deny from 216.127.80.23

Deny from 65.254.33.130

Deny from 69.59.142.172

Deny from 216.93.161.126

Deny from 38.114.104.61

Deny from 63.225.19.241

Deny from 64.62.142.231

Deny from 64.62.142.233

Deny from 64.62.142.235

Deny from 64.62.142.237

Deny from 64.62.142.239

Deny from 64.62.142.241

Deny from 64.62.142.243

Deny from 64.62.142.245

Deny from 64.62.168.0

Deny from 64.62.168.1

Deny from 64.62.168.2

Deny from 64.62.168.3

Deny from 64.62.168.4

Deny from 64.62.168.5

Deny from 64.62.168.6

Deny from 64.62.168.7

Deny from 64.62.168.8

Deny from 64.62.168.9

Deny from 64.62.168.10

Deny from 64.62.168.11

Deny from 64.62.168.12

Deny from 64.62.168.13

Deny from 64.62.168.14

Deny from 64.62.168.15

Deny from 64.62.168.16

Deny from 64.62.168.17

Deny from 64.62.168.18

Deny from 64.62.168.19

Deny from 64.62.168.20

Deny from 64.62.168.21

Deny from 64.62.168.22

Deny from 64.62.168.23

Deny from 64.62.168.24

Deny from 64.62.168.25

Deny from 64.62.168.26

Deny from 64.62.168.27

Deny from 64.62.168.28

Deny from 64.62.168.29

Deny from 64.62.168.30

Deny from 64.62.168.31

Deny from 64.62.168.32

Deny from 64.62.168.33

Deny from 64.62.168.34

Deny from 64.62.168.35

Deny from 64.62.168.36

Deny from 64.62.168.37

Deny from 64.62.168.38

Deny from 64.62.168.39

Deny from 64.62.168.40

Deny from 64.62.168.41

Deny from 64.62.168.42

Deny from 64.62.168.43

Deny from 64.62.168.44

Deny from 64.62.168.45

Deny from 64.62.168.46

Deny from 64.62.168.47

Deny from 64.62.168.48

Deny from 64.62.168.49

Deny from 64.62.168.50

Deny from 64.62.168.51

Deny from 64.62.168.52

Deny from 64.62.168.53

Deny from 64.62.168.54

Deny from 64.62.168.55

Deny from 64.62.168.56

Deny from 64.62.168.57

Deny from 64.62.168.58

Deny from 64.62.168.59

Deny from 64.62.168.60

Deny from 64.62.168.61

Deny from 64.62.168.62

Deny from 64.62.168.63

Deny from 64.62.168.64

Deny from 64.62.168.65

Deny from 64.62.168.66

Deny from 64.62.168.67

Deny from 64.62.168.68

Deny from 64.62.168.69

Deny from 64.62.168.70

Deny from 64.62.168.71

Deny from 64.62.168.72

Deny from 64.62.168.73

Deny from 64.62.168.74

Deny from 64.62.168.75

Deny from 64.62.168.76

Deny from 64.62.168.77

Deny from 64.62.168.78

Deny from 64.62.168.79

Deny from 64.62.168.80

Deny from 64.62.168.81

Deny from 64.62.168.82

Deny from 64.62.168.83

Deny from 64.62.168.84

Deny from 64.62.168.85

Deny from 64.62.168.86

Deny from 64.62.168.87

Deny from 64.62.168.88

Deny from 64.62.168.89

Deny from 64.62.168.90

Deny from 64.62.168.91

Deny from 64.62.168.92

Deny from 64.62.168.93

Deny from 64.62.168.94

Deny from 64.62.168.95

Deny from 64.62.168.96

Deny from 64.62.168.97

Deny from 64.62.168.98

Deny from 64.62.168.99

Deny from 64.62.168.100

Deny from 64.62.168.101

Deny from 64.62.168.102

Deny from 64.62.168.103

Deny from 64.62.168.104

Deny from 64.62.168.105

Deny from 64.62.168.106

Deny from 64.62.168.107

Deny from 64.62.168.108

Deny from 64.62.168.109

Deny from 64.62.168.110

Deny from 64.62.168.111

Deny from 64.62.168.112

Deny from 64.62.168.113

Deny from 64.62.168.114

Deny from 64.62.168.115

Deny from 64.62.168.116

Deny from 64.62.168.117

Deny from 64.62.168.118

Deny from 64.62.168.119

Deny from 64.62.168.120

Deny from 64.62.168.121

Deny from 64.62.168.122

Deny from 64.62.168.123

Deny from 64.62.168.124

Deny from 64.62.168.125

Deny from 64.62.168.126

Deny from 64.62.168.127

Deny from 64.139.94.202

Deny from 64.211.63.145

Deny from 64.211.63.146

Deny from 66.154.102

Deny from 66.154.103

Deny from 66.231.188

Deny from 66.231.189

Deny from 67.16.94.2

Deny from 207.114.174.1

Deny from 207.114.174.2

Deny from 207.114.174.3

Deny from 207.114.174.6

Deny from 207.114.174.5

Deny from 207.114.174.7

Deny from 207.114.174.8

Deny from 207.114.174.9

Deny from 207.114.174.10

Deny from 207.114.174.11

Deny from 207.114.174.12

Deny from 207.114.174.13

Deny from 207.114.174.14

Deny from 207.114.174.15

Deny from 207.114.174.16

Deny from 207.114.174.17

Deny from 207.114.174.18

Deny from 207.114.174.19

Deny from 207.114.174.20

Deny from 207.114.174.21

Deny from 207.114.174.22

Deny from 207.114.174.23

Deny from 207.114.174.24

Deny from 207.114.174.25

Deny from 207.114.174.26

Deny from 208.254.87.133

Deny from 216.243.113.1

Deny from 216.243.113.81

Deny from 216.243.113.82

Deny from 216.243.113.83

Deny from 216.243.113.84

Deny from 216.243.113.86

Deny from 216.243.113.87

Deny from 217.75.103.130

Deny from 66.194.55.242

Deny from 66.195.77.130

Deny from 63.240.232.3

Deny from 198.65.147.172

Deny from 216.69.177.55

Deny from 64.224.197.99

Deny from 202.229.31.13

Deny from 202.229.31.14

Deny from 202.229.31.15

Deny from 210.150.10.100

Deny from 210.150.10.73

Deny from 210.150.25.156

Deny from 210.165.39.216

Deny from 210.165.39.217

Deny from 210.165.39.216

Deny from 210.165.39.244

Deny from 210.165.39.245

Deny from 210.165.39.246

Deny from 210.165.39.247

Deny from 210.165.39.248

Deny from 210.165.39.249

Deny from 210.165.39.250

Deny from 210.165.39.252

Deny from 210.165.39.253

Deny from 210.165.39.254

Deny from 210.173.179.22

Deny from 210.173.179.26

Deny from 210.173.179.30

Deny from 210.173.179.31

Deny from 210.173.179.32

Deny from 210.173.179.33

Deny from 210.173.179.37

Deny from 210.173.179.40

Deny from 210.173.179.45

Deny from 210.173.179.47

Deny from 210.173.179.50

Deny from 210.173.179.53

Deny from 210.173.179.82

Deny from 210.173.179.83

Deny from 210.173.179.149

Deny from 210.173.180.157

Deny from 210.173.180.160

Deny from 210.173.180.168

Deny from 210.173.180.192

Deny from 216.181.122.11

Deny from 216.181.122.11

Deny from 212.125.68.30

Deny from 206.30.142.100

Deny from 193.62.81.96

Deny from 64.246.15.61

Deny from 192.41.170.17

Deny from 208.232.223.80

Deny from 216.55.4.15

Deny from 24.1.248.148

Deny from 69.16.227.165

Deny from 209.1.12.2

Deny from 209.1.12.220

Deny from 209.1.12.221

Deny from 209.1.12.222

Deny from 209.1.12.224

Deny from 209.1.12.225

Deny from 209.1.12.226

Deny from 209.1.12.227

Deny from 209.1.12.228

Deny from 209.1.12.229

Deny from 209.1.12.230

Deny from 209.1.12.231

Deny from 209.1.12.232

Deny from 209.1.12.233

Deny from 209.1.12.234

Deny from 209.1.12.235

Deny from 209.1.12.236

Deny from 209.1.12.237

Deny from 209.1.12.238

Deny from 209.1.12.239

Deny from 209.1.12.240

Deny from 209.1.12.241

Deny from 209.1.12.242

Deny from 204.62.132.20

Deny from 209.75.193.2

Deny from 209.114.176.250

Deny from 65.111.164.143

Deny from 65.111.168.41

Deny from 204.146.80.99

Deny from 204.146.81.99

Deny from 209.239.36.253

Deny from 205.188.147.53

Deny from 205.188.147.56

Deny from 205.188.252.121

Deny from 212.123.67.70

Deny from 193.120.253.2

Deny from 209.208.197.115

Deny from 62.69.162.144

Deny from 62.69.162.171

Deny from 62.69.162.177

Deny from 213.244.181.190

Deny from 212.72.39.2

Deny from 194.134.109.3

Deny from 194.134.109.7

Deny from 194.134.109.17

Deny from 194.134.109.21

Deny from 212.72.39.8

Deny from 212.72.39.3

Deny from 212.72.39.4

Deny from 212.72.39.5

Deny from 212.72.39.6

Deny from 212.72.39.7

Deny from 212.72.39.9

Deny from 212.72.39.10

Deny from 212.72.39.11

Deny from 212.72.39.12

Deny from 212.72.39.13

Deny from 212.72.39.14

Deny from 212.72.39.15

Deny from 212.72.39.16

Deny from 212.72.39.17

Deny from 212.72.39.18

Deny from 212.72.39.19

Deny from 212.72.39.20

Deny from 212.72.39.21

Deny from 212.72.39.22

Deny from 212.72.39.23

Deny from 212.72.39.24

Deny from 212.72.39.27

Deny from 212.72.39.28

Deny from 212.72.39.29

Deny from 212.72.39.30

Deny from 212.72.39.194

Deny from 212.72.39.195

Deny from 212.72.39.196

Deny from 212.72.39.197

Deny from 212.72.39.198

Deny from 212.72.39.199

Deny from 212.72.39.200

Deny from 212.72.39.201

Deny from 212.72.39.202

Deny from 212.72.39.203

Deny from 212.72.39.204

Deny from 212.72.39.205

Deny from 212.72.39.206

Deny from 212.72.39.207

Deny from 212.72.39.208

Deny from 212.72.39.209

Deny from 212.72.39.210

Deny from 212.72.39.211

Deny from 212.72.39.212

Deny from 212.72.39.213

Deny from 212.72.39.214

Deny from 212.72.39.215

Deny from 212.72.39.216

Deny from 212.72.39.217

Deny from 212.72.39.218

Deny from 212.72.39.219

Deny from 212.72.39.220

Deny from 212.72.39.221

Deny from 213.215.201.204

Deny from 213.215.201.205

Deny from 213.215.201.221

Deny from 213.215.201.222

Deny from 213.215.201.234

Deny from 213.215.201.235

Deny from 195.27.115.51

Deny from 212.72.181.12

Deny from 165.254.215.60

Deny from 165.254.215.61

Deny from 165.254.215.62

Deny from 165.254.215.63

Deny from 129.170.24.57

Deny from 128.255.244.88

Deny from 80.67.17.98

Deny from 195.57.152.80

Deny from 206.132.56.130

Deny from 209.133.111.132

Deny from 216.200.196.8

Deny from 216.200.196.9

Deny from 216.200.196.10

Deny from 216.200.196.11

Deny from 216.200.196.12

Deny from 216.200.196.13

Deny from 216.200.196.14

Deny from 216.200.196.15

Deny from 194.232.15.65

Deny from 85.10.36.125

Deny from 133.194.226.226

Deny from 193.195.19.10

Deny from 207.82.104.100

Deny from 66.240.140.190

Deny from 216.33.59.61

Deny from 208.239.240.102

Deny from 66.28.139.66

Deny from 66.28.139.71

Deny from 95.226.160.249

Deny from 216.234.161.144

Deny from 64.71.144.11

Deny from 64.71.144.13

Deny from 64.71.144.15

Deny from 64.71.144.17

Deny from 64.71.144.19

Deny from 64.71.144.21

Deny from 64.71.144.23

Deny from 64.71.144.25

Deny from 64.71.144.27

Deny from 64.71.144.29

Deny from 64.71.144.31

Deny from 64.71.144.33

Deny from 64.71.144.34

Deny from 64.71.144.35

Deny from 64.71.144.36

Deny from 64.71.144.37

Deny from 64.71.144.39

Deny from 64.71.144.43

Deny from 64.71.144.45

Deny from 64.71.144.47

Deny from 64.71.144.49

Deny from 64.71.144.51

Deny from 64.71.144.53

Deny from 64.71.144.55

Deny from 64.71.144.57

Deny from 64.71.144.59

Deny from 64.71.144.61

Deny from 64.71.144.63

Deny from 64.71.144.65

Deny from 64.71.144.67

Deny from 64.71.144.69

Deny from 64.71.144.70

Deny from 64.71.144.71

Deny from 64.71.144.72

Deny from 64.71.144.73

Deny from 64.71.144.75

Deny from 64.71.144.77

Deny from 195.211.11.50

Deny from 216.148.213.150

Deny from 212.112.128.30

Deny from 139.153.13.20

Deny from 195.113.214.196

Deny from 195.113.214.204

Deny from 195.113.214.207

Deny from 195.122.204.2

Deny from 195.122.208.217

Deny from 212.47.13.201

Deny from 212.71.128.66

Deny from 212.71.128.67

Deny from 195.210.57.83

Deny from 216.33.119.136

Deny from 216.33.119.138

Deny from 38.170.72.194

Deny from 207.81.156.97

Deny from 24.57.2.49

Deny from 24.57.5.63

Deny from 24.57.8.78

Deny from 24.57.240.53

Deny from 24.235.212.163

Deny from 151.189.12.140

Deny from 38.113.234.180

Deny from 38.113.234.181

Deny from 6.90.81.41

Deny from 66.227.104.196

Deny from 85.25.124.167

Deny from 202.191.32.67

Deny from 202.191.34.146

Deny from 62.49.200.56

Deny from 80.177.149.217

Deny from 216.52.252.195

Deny from 216.52.252.208

Deny from 63.251.210.65

Deny from 64.40.105.197

Deny from 206.191.13.2

Deny from 206.191.13.3

Deny from 209.87.232.5

Deny from 12.199.64.41

Deny from 12.199.64.69

Deny from 209.177.62.135

Deny from 209.177.62.151

Deny from 207.138.42.212

Deny from 64.241.242.160

Deny from 64.241.242.18

Deny from 64.241.242.34

Deny from 195.20.224.66

Deny from 195.153.48.120

Deny from 216.94.9.119

Deny from 195.44.0.150

Deny from 195.44.0.104

Deny from 195.44.0.152

Deny from 195.44.0.153

Deny from 207.158.203.71

Deny from 66.219.58.34

Deny from 66.219.58.41

Deny from 66.219.58.42

Deny from 66.219.58.43

Deny from 66.219.58.44

Deny from 66.219.58.45

Deny from 71.41.201.34

Deny from 71.41.201.35

Deny from 71.41.201.36

Deny from 71.41.201.37

Deny from 71.41.201.38

Deny from 130.75.2.24

Deny from 130.75.6.10

Deny from 213.203.245.153

Deny from 213.203.245.158

Deny from 194.202.39.44

Deny from 212.56.39.2

Deny from 217.154.244.217

Deny from 217.154.244.228

Deny from 217.154.244.229

Deny from 217.154.244.230

Deny from 217.154.244.231

Deny from 217.154.244.232

Deny from 217.154.244.233

Deny from 217.154.244.234

Deny from 217.154.244.235

Deny from 217.154.244.239

Deny from 217.154.244.240

Deny from 217.154.244.241

Deny from 217.154.245.2

Deny from 217.154.245.201

Deny from 217.154.245.202

Deny from 217.154.245.203

Deny from 217.154.245.204

Deny from 217.154.245.205

Deny from 217.154.245.207

Deny from 217.154.245.209

Deny from 217.154.245.210

Deny from 217.154.245.211

Deny from 217.154.245.212

Deny from 217.154.245.213

Deny from 217.154.245.214

Deny from 217.154.245.215

Deny from 217.154.245.216

Deny from 217.154.245.217

Deny from 217.154.245.218

Deny from 217.154.245.219

Deny from 217.154.245.220

Deny from 217.154.245.224

Deny from 217.154.245.225

Deny from 217.154.245.226

Deny from 217.154.245.227

Deny from 217.154.245.228

Deny from 217.154.245.229

Deny from 217.154.245.230

Deny from 217.154.245.232

Deny from 217.154.245.233

Deny from 217.154.245.234

Deny from 217.154.245.236

Deny from 217.154.245.237

Deny from 217.154.245.238

Deny from 217.154.245.239

Deny from 217.154.245.240

Deny from 217.154.245.241

Deny from 217.154.245.242

Deny from 217.154.245.244

Deny from 217.154.245.245

Deny from 217.154.245.246

Deny from 217.154.245.248

Deny from 217.154.245.249

Deny from 217.154.244.251

Deny from 217.154.245.250

Deny from 217.154.245.251

Deny from 217.205.60

Deny from 217.205.61

Deny from 195.200.163.250

Deny from 195.200.169.193

Deny from 67.18.55.52

Deny from 198.31.135.245

Deny from 217.155.205.49

Deny from 217.42.129.249

Deny from 217.42.133.84

Deny from 81.149.13.26

Deny from 81.154.83.118

Deny from 81.155.214.30

Deny from 83.67.53.154

Deny from 213.41.71.18

Deny from 63.246.154.32

Deny from 208.37.26.100

Deny from 208.37.26.120

Deny from 209.67.208.170

Deny from 131.107.0

Deny from 131.107.137.165

Deny from 131.107.137.166

Deny from 131.107.137.37

Deny from 131.107.137.47

Deny from 131.107.163.47

Deny from 131.107.163.48

Deny from 131.107.163.49

Deny from 131.107.163.57

Deny from 131.107.163.58

Deny from 131.107.76.139

Deny from 202.96.51.137

Deny from 202.96.51.144

Deny from 202.96.51.145

Deny from 202.96.51.147

Deny from 202.96.51.148

Deny from 202.96.51.149

Deny from 202.96.51.150

Deny from 202.96.51.151

Deny from 202.96.51.152

Deny from 202.96.51.153

Deny from 202.96.51.154

Deny from 202.96.51.155

Deny from 202.96.51.156

Deny from 202.96.51.157

Deny from 202.96.51.158

Deny from 202.96.51.159

Deny from 202.96.51.162

Deny from 202.96.51.172

Deny from 204.4.80.10

Deny from 204.95.98.251

Deny from 204.95.98.252

Deny from 204.95.98.253

Deny from 207.46.238.133

Deny from 207.46.238.137

Deny from 207.46.238.138

Deny from 207.46.238.143

Deny from 207.46.71.12

Deny from 207.46.71.16

Deny from 207.46.89.16

Deny from 207.46.89.17

Deny from 207.46.98

Deny from 207.68.146

Deny from 207.68.154

Deny from 207.68.157

Deny from 207.68.188.241

Deny from 207.68.188.242

Deny from 207.68.188.243

Deny from 207.68.188.244

Deny from 213.199.128.156

Deny from 219.142.53.16

Deny from 219.142.53.17

Deny from 219.142.53.18

Deny from 219.142.53.19

Deny from 219.142.53.20

Deny from 219.142.53.21

Deny from 219.142.53.22

Deny from 219.142.53.23

Deny from 219.142.53.24

Deny from 219.142.53.25

Deny from 219.142.53.26

Deny from 219.142.53.27

Deny from 219.142.53.28

Deny from 219.142.53.29

Deny from 219.142.53.30

Deny from 63.194.155.144

Deny from 63.194.155.145

Deny from 63.194.155.146

Deny from 63.194.155.147

Deny from 63.194.155.148

Deny from 63.194.155.149

Deny from 63.194.155.150

Deny from 63.194.155.151

Deny from 64.4.8

Deny from 65.54.112.146

Deny from 65.54.164.100

Deny from 65.54.164.101

Deny from 65.54.164.102

Deny from 65.54.164.103

Deny from 65.54.164.104

Deny from 65.54.164.105

Deny from 65.54.164.106

Deny from 65.54.164.107

Deny from 65.54.164.108

Deny from 65.54.164.109

Deny from 65.54.164.110

Deny from 65.54.164.111

Deny from 65.54.164.112

Deny from 65.54.164.113

Deny from 65.54.164.114

Deny from 65.54.164.115

Deny from 65.54.164.116

Deny from 65.54.164.117

Deny from 65.54.164.118

Deny from 65.54.164.119

Deny from 65.54.164.120

Deny from 65.54.164.121

Deny from 65.54.164.122

Deny from 65.54.164.123

Deny from 65.54.164.124

Deny from 65.54.164.125

Deny from 65.54.164.126

Deny from 65.54.164.127

Deny from 65.54.164.128

Deny from 65.54.164.129

Deny from 65.54.164.130

Deny from 65.54.164.131

Deny from 65.54.164.132

Deny from 65.54.164.133

Deny from 65.54.164.134

Deny from 65.54.164.135

Deny from 65.54.164.34

Deny from 65.54.164.35

Deny from 65.54.164.36

Deny from 65.54.164.37

Deny from 65.54.164.38

Deny from 65.54.164.39

Deny from 65.54.164.40

Deny from 65.54.164.41

Deny from 65.54.164.42

Deny from 65.54.164.43

Deny from 65.54.164.44

Deny from 65.54.164.45

Deny from 65.54.164.46

Deny from 65.54.164.47

Deny from 65.54.164.48

Deny from 65.54.164.49

Deny from 65.54.164.50

Deny from 65.54.164.51

Deny from 65.54.164.52

Deny from 65.54.164.53

Deny from 65.54.164.54

Deny from 65.54.164.55

Deny from 65.54.164.56

Deny from 65.54.164.57

Deny from 65.54.164.58

Deny from 65.54.164.59

Deny from 65.54.164.60

Deny from 65.54.164.61

Deny from 65.54.164.62

Deny from 65.54.164.63

Deny from 65.54.164.64

Deny from 65.54.164.65

Deny from 65.54.164.66

Deny from 65.54.164.67

Deny from 65.54.164.68

Deny from 65.54.164.69

Deny from 65.54.164.70

Deny from 65.54.164.71

Deny from 65.54.164.72

Deny from 65.54.164.73

Deny from 65.54.164.74

Deny from 65.54.164.75

Deny from 65.54.164.76

Deny from 65.54.164.77

Deny from 65.54.164.78

Deny from 65.54.164.79

Deny from 65.54.164.80

Deny from 65.54.164.81

Deny from 65.54.164.82

Deny from 65.54.164.83

Deny from 65.54.164.84

Deny from 65.54.164.85

Deny from 65.54.164.86

Deny from 65.54.164.87

Deny from 65.54.164.88

Deny from 65.54.164.89

Deny from 65.54.164.90

Deny from 65.54.164.91

Deny from 65.54.164.92

Deny from 65.54.164.93

Deny from 65.54.164.94

Deny from 65.54.164.95

Deny from 65.54.164.96

Deny from 65.54.164.97

Deny from 65.54.164.98

Deny from 65.54.164.99

Deny from 65.54.165

Deny from 65.54.188

Deny from 65.54.189

Deny from 65.54.236.87

Deny from 65.54.236.88

Deny from 65.54.236.90

Deny from 65.55.0

Deny from 65.55.1

Deny from 65.55.10

Deny from 65.55.100

Deny from 65.55.101

Deny from 65.55.102

Deny from 65.55.103

Deny from 65.55.104

Deny from 65.55.105

Deny from 65.55.106

Deny from 65.55.107

Deny from 65.55.108

Deny from 65.55.109

Deny from 65.55.11

Deny from 65.55.110

Deny from 65.55.111

Deny from 65.55.112

Deny from 65.55.113

Deny from 65.55.114

Deny from 65.55.115

Deny from 65.55.116

Deny from 65.55.117

Deny from 65.55.118

Deny from 65.55.119

Deny from 65.55.12

Deny from 65.55.120

Deny from 65.55.121

Deny from 65.55.122

Deny from 65.55.123

Deny from 65.55.124

Deny from 65.55.125

Deny from 65.55.126

Deny from 65.55.127

Deny from 65.55.128

Deny from 65.55.129

Deny from 65.55.13

Deny from 65.55.130

Deny from 65.55.131

Deny from 65.55.132

Deny from 65.55.133

Deny from 65.55.134

Deny from 65.55.135

Deny from 65.55.136

Deny from 65.55.137

Deny from 65.55.138

Deny from 65.55.139

Deny from 65.55.14

Deny from 65.55.140

Deny from 65.55.141

Deny from 65.55.142

Deny from 65.55.143

Deny from 65.55.144

Deny from 65.55.145

Deny from 65.55.146

Deny from 65.55.147

Deny from 65.55.148

Deny from 65.55.149

Deny from 65.55.15

Deny from 65.55.150

Deny from 65.55.151

Deny from 65.55.152

Deny from 65.55.153

Deny from 65.55.154

Deny from 65.55.155

Deny from 65.55.156

Deny from 65.55.157

Deny from 65.55.158

Deny from 65.55.159

Deny from 65.55.16

Deny from 65.55.160

Deny from 65.55.161

Deny from 65.55.162

Deny from 65.55.163

Deny from 65.55.164

Deny from 65.55.165

Deny from 65.55.166

Deny from 65.55.167

Deny from 65.55.168

Deny from 65.55.169

Deny from 65.55.17

Deny from 65.55.170

Deny from 65.55.171

Deny from 65.55.172

Deny from 65.55.173

Deny from 65.55.174

Deny from 65.55.175

Deny from 65.55.176

Deny from 65.55.177

Deny from 65.55.178

Deny from 65.55.179

Deny from 65.55.18

Deny from 65.55.180

Deny from 65.55.181

Deny from 65.55.182

Deny from 65.55.183

Deny from 65.55.184

Deny from 65.55.185

Deny from 65.55.186

Deny from 65.55.187

Deny from 65.55.188

Deny from 65.55.189

Deny from 65.55.19

Deny from 65.55.190

Deny from 65.55.191

Deny from 65.55.192

Deny from 65.55.193

Deny from 65.55.194

Deny from 65.55.195

Deny from 65.55.196

Deny from 65.55.197

Deny from 65.55.198

Deny from 65.55.199

Deny from 65.55.2

Deny from 65.55.20

Deny from 65.55.200

Deny from 65.55.201

Deny from 65.55.202

Deny from 65.55.203

Deny from 65.55.204

Deny from 65.55.205

Deny from 65.55.206

Deny from 65.55.207

Deny from 65.55.208

Deny from 65.55.209

Deny from 65.55.21

Deny from 65.55.210

Deny from 65.55.211

Deny from 65.55.212

Deny from 65.55.213

Deny from 65.55.214

Deny from 65.55.215

Deny from 65.55.216

Deny from 65.55.217

Deny from 65.55.217.53

Deny from 65.55.217.54

Deny from 65.55.217.55

Deny from 65.55.217.56

Deny from 65.55.217.57

Deny from 65.55.218

Deny from 65.55.219

Deny from 65.55.22

Deny from 65.55.220

Deny from 65.55.221

Deny from 65.55.222

Deny from 65.55.223

Deny from 65.55.224

Deny from 65.55.225

Deny from 65.55.226

Deny from 65.55.227

Deny from 65.55.228

Deny from 65.55.229

Deny from 65.55.23

Deny from 65.55.230

Deny from 65.55.231

Deny from 65.55.232

Deny from 65.55.233

Deny from 65.55.234

Deny from 65.55.235

Deny from 65.55.236

Deny from 65.55.237

Deny from 65.55.238

Deny from 65.55.239

Deny from 65.55.24

Deny from 65.55.240

Deny from 65.55.241

Deny from 65.55.242

Deny from 65.55.243

Deny from 65.55.244

Deny from 65.55.245

Deny from 65.55.246

Deny from 65.55.247

Deny from 65.55.248

Deny from 65.55.249

Deny from 65.55.25

Deny from 65.55.250

Deny from 65.55.251

Deny from 65.55.252

Deny from 65.55.253

Deny from 65.55.254

Deny from 65.55.255

Deny from 65.55.26

Deny from 65.55.27

Deny from 65.55.28

Deny from 65.55.29

Deny from 65.55.3

Deny from 65.55.30

Deny from 65.55.31

Deny from 65.55.32

Deny from 65.55.33

Deny from 65.55.34

Deny from 65.55.35

Deny from 65.55.36

Deny from 65.55.37

Deny from 65.55.38

Deny from 65.55.39

Deny from 65.55.4

Deny from 65.55.40

Deny from 65.55.41

Deny from 65.55.42

Deny from 65.55.43

Deny from 65.55.44

Deny from 65.55.45

Deny from 65.55.46

Deny from 65.55.47

Deny from 65.55.48

Deny from 65.55.49

Deny from 65.55.5

Deny from 65.55.50

Deny from 65.55.51

Deny from 65.55.52

Deny from 65.55.53

Deny from 65.55.54

Deny from 65.55.55

Deny from 65.55.56

Deny from 65.55.57

Deny from 65.55.58

Deny from 65.55.59

Deny from 65.55.6

Deny from 65.55.60

Deny from 65.55.61

Deny from 65.55.62

Deny from 65.55.63

Deny from 65.55.64

Deny from 65.55.65

Deny from 65.55.66

Deny from 65.55.67

Deny from 65.55.68

Deny from 65.55.69

Deny from 65.55.7

Deny from 65.55.70

Deny from 65.55.71

Deny from 65.55.72

Deny from 65.55.73

Deny from 65.55.74

Deny from 65.55.75

Deny from 65.55.76

Deny from 65.55.77

Deny from 65.55.78

Deny from 65.55.79

Deny from 65.55.8

Deny from 65.55.80

Deny from 65.55.81

Deny from 65.55.82

Deny from 65.55.83

Deny from 65.55.84

Deny from 65.55.85

Deny from 65.55.86

Deny from 65.55.87

Deny from 65.55.88

Deny from 65.55.89

Deny from 65.55.9

Deny from 65.55.90

Deny from 65.55.91

Deny from 65.55.92

Deny from 65.55.93

Deny from 65.55.94

Deny from 65.55.95

Deny from 65.55.96

Deny from 65.55.97

Deny from 65.55.98

Deny from 65.55.99

Deny from 68.55.252

Deny from 24.42.211.66

Deny from 194.221.102.137

Deny from 66.27.55.14

Deny from 209.116.58.140

Deny from 199.184.188.143

Deny from 199.184.188.151

Deny from 199.184.188.160

Deny from 204.210.31.231

Deny from 209.116.58.143

Deny from 209.191.102.228

Deny from 61.247.217.34

Deny from 61.247.217.41

Deny from 61.247.217.42

Deny from 61.247.221.43

Deny from 61.247.221.44

Deny from 61.247.221.45

Deny from 61.247.221.87

Deny from 61.247.221.92

Deny from 61.247.222.53

Deny from 61.247.222.55

Deny from 61.78.61.162

Deny from 61.78.61.163

Deny from 61.78.61.164

Deny from 61.78.61.165

Deny from 61.78.61.166

Deny from 61.78.61.167

Deny from 61.78.61.168

Deny from 61.78.61.176

Deny from 61.78.61.192

Deny from 61.78.61.193

Deny from 61.78.61.194

Deny from 61.78.61.195

Deny from 61.78.61.206

Deny from 61.78.61.220

Deny from 61.78.61.221

Deny from 61.78.61.222

Deny from 61.78.61.223

Deny from 114.111.36.26

Deny from 202.179.180.43

Deny from 202.179.180.45

Deny from 202.179.180.53

Deny from 202.179.180.54

Deny from 202.179.181.137

Deny from 202.179.181.138

Deny from 218.23.2.122

Deny from 218.145.25.11

Deny from 218.145.25.14

Deny from 218.145.25.17

Deny from 218.145.25.19

Deny from 218.145.25.20

Deny from 218.145.25.43

Deny from 218.145.25.45

Deny from 218.145.25.46

Deny from 218.145.25.49

Deny from 218.145.25.51

Deny from 218.145.25.53

Deny from 218.145.25.52

Deny from 218.145.25.78

Deny from 218.145.25.83

Deny from 218.145.25.105

Deny from 218.145.25.109

Deny from 218.145.25.110

Deny from 218.145.25.111

Deny from 218.145.25.113

Deny from 220.73.146.105

Deny from 220.73.146.106

Deny from 220.73.146.107

Deny from 220.73.146.108

Deny from 220.73.159.54

Deny from 220.73.159.55

Deny from 220.73.159.56

Deny from 220.73.159.57

Deny from 220.73.159.58

Deny from 220.73.159.59

Deny from 220.73.159.60

Deny from 220.73.159.61

Deny from 220.73.159.62

Deny from 220.73.159.63

Deny from 220.73.165.11

Deny from 220.73.165.12

Deny from 220.73.165.14

Deny from 220.73.165.15

Deny from 220.73.165.17

Deny from 220.73.165.77

Deny from 220.73.165.142

Deny from 220.73.165.143

Deny from 220.73.165.204

Deny from 220.73.165.206

Deny from 220.95.235.166

Deny from 222.122.194.111

Deny from 222.122.194.112

Deny from 222.122.194.114

Deny from 222.122.194.115

Deny from 222.122.194.164

Deny from 222.122.194.27

Deny from 222.122.194.31

Deny from 222.122.194.33

Deny from 222.122.194.35

Deny from 222.122.194.41

Deny from 222.122.194.47

Deny from 222.122.194.53

Deny from 222.122.194.75

Deny from 194.231.30.16

Deny from 195.188.192.23

Deny from 208.222.98.150

Deny from 199.35.98.30

Deny from 199.35.98.241

Deny from 150.59.20.63

Deny from 150.59.20.20

Deny from 216.71.78.11

Deny from 69.9.167.198

Deny from 84.56.103.71

Deny from 84.56.114.19

Deny from 84.56.74.242

Deny from 84.56.77.39

Deny from 84.56.84.58

Deny from 84.56.93.33

Deny from 212.63.155.1

Deny from 67.18.222.18

Deny from 129.110.16.16

Deny from 129.110.10.1

Deny from 69.64.69.73

Deny from 194.224.199.47

Deny from 194.224.199.50

Deny from 194.224.199.52

Deny from 210.165.39.210

Deny from 210.165.39.211

Deny from 210.165.39.212

Deny from 210.165.39.213

Deny from 210.165.39.214

Deny from 210.165.39.215

Deny from 210.165.39.253

Deny from 82.32.121.70

Deny from 82.32.121.164

Deny from 82.32.123.249

Deny from 82.33.193.111

Deny from 82.68.206.22

Deny from 84.9.137.104

Deny from 208.53.131.158

Deny from 130.235.86.136

Deny from 130.235.86.137

Deny from 202.36.240.1

Deny from 194.221.132.133

Deny from 68.88.244.177

Deny from 68.88.244.178

Deny from 69.150.7.163

Deny from 69.150.7.164

Deny from 69.150.7.165

Deny from 128.95.1.184

Deny from 128.95.1.208

Deny from 128.95.1.84

Deny from 64.62.175.130

Deny from 64.62.175.131

Deny from 64.62.175.137

Deny from 64.71.131.109

Deny from 64.71.131.117

Deny from 64.127.124.130

Deny from 64.127.124.131

Deny from 64.127.124.132

Deny from 64.127.124.133

Deny from 64.127.124.139

Deny from 64.127.124.143

Deny from 64.127.124.145

Deny from 64.127.124.148

Deny from 64.127.124.153

Deny from 64.127.124.157

Deny from 64.127.124.158

Deny from 64.127.124.159

Deny from 64.127.124.165

Deny from 64.127.124.168

Deny from 64.127.124.169

Deny from 64.127.124.170

Deny from 64.127.124.171

Deny from 64.127.124.172

Deny from 64.127.124.173

Deny from 64.127.124.188

Deny from 64.127.124.189

Deny from 64.127.124.190

Deny from 64.127.124.191

Deny from 64.127.124.193

Deny from 65.19.150.134

Deny from 65.19.150.204

Deny from 65.19.150.206

Deny from 65.19.150.207

Deny from 65.19.150.208

Deny from 65.19.150.209

Deny from 65.19.150.210

Deny from 65.19.150.211

Deny from 65.19.150.212

Deny from 65.19.150.213

Deny from 65.19.150.214

Deny from 65.19.150.217

Deny from 65.19.150.218

Deny from 65.19.150.219

Deny from 65.19.150.220

Deny from 65.19.150.221

Deny from 65.19.150.222

Deny from 65.19.150.223

Deny from 65.19.150.224

Deny from 65.19.150.225

Deny from 65.19.150.226

Deny from 65.19.150.227

Deny from 65.19.150.228

Deny from 65.19.150.229

Deny from 65.19.150.230

Deny from 65.19.150.231

Deny from 65.19.150.232

Deny from 65.19.150.233

Deny from 65.19.150.234

Deny from 65.19.150.235

Deny from 65.19.150.236

Deny from 65.19.150.237

Deny from 65.19.150.238

Deny from 65.19.150.239

Deny from 65.19.150.240

Deny from 65.19.150.241

Deny from 65.19.150.242

Deny from 65.19.150.243

Deny from 65.19.150.244

Deny from 65.19.150.245

Deny from 65.19.150.246

Deny from 65.19.150.247

Deny from 65.19.150.248

Deny from 65.19.150.249

Deny from 65.19.150.250

Deny from 65.19.150.251

Deny from 65.19.150.252

Deny from 65.19.169.228

Deny from 65.19.169.229

Deny from 65.19.169.230

Deny from 65.19.150.250

Deny from 65.19.169.242

Deny from 65.19.169.252

Deny from 65.19.169.254

Deny from 213.180.128.151

Deny from 213.180.128.152

Deny from 213.180.128.153

Deny from 213.180.128.154

Deny from 213.180.137.71

Deny from 195.20.225.123

Deny from 212.227.109.241

Deny from 195.20.225.112

Deny from 195.20.225.115

Deny from 212.227.109.14

Deny from 212.227.109.57

Deny from 212.227.109.58

Deny from 212.227.109.197

Deny from 212.227.109.225

Deny from 212.227.109.229

Deny from 212.227.118.9

Deny from 212.227.118.25

Deny from 212.227.118.130

Deny from 212.227.119.5

Deny from 64.23.82.44

Deny from 140.123.100.5

Deny from 140.123.101.14

Deny from 140.123.101.143

Deny from 140.123.101.144

Deny from 140.123.101.145

Deny from 140.123.101.146

Deny from 140.123.101.147

Deny from 140.123.101.148

Deny from 140.123.101.62

Deny from 140.123.101.66

Deny from 140.123.101.67

Deny from 140.123.103.2

Deny from 140.123.103.244

Deny from 140.123.103.4

Deny from 202.165.96.139

Deny from 202.165.96.140

Deny from 202.165.96.167

Deny from 202.165.96.173

Deny from 205.158.61.194

Deny from 205.158.61.197

Deny from 205.158.61.198

Deny from 205.158.61.200

Deny from 205.158.61.201

Deny from 205.158.61.202

Deny from 205.158.61.207

Deny from 209.133.111.56

Deny from 209.133.111.57

Deny from 209.133.111.58

Deny from 210.201.54.203

Deny from 210.201.54.207

Deny from 210.201.54.209

Deny from 210.201.54.214

Deny from 210.201.54.216

Deny from 210.201.54.218

Deny from 210.59.144.148

Deny from 210.59.144.149

Deny from 211.155.160.12

Deny from 211.155.160.2

Deny from 211.155.160.5

Deny from 211.72.252.147

Deny from 211.72.252.150

Deny from 211.72.252.182

Deny from 211.72.252.242

Deny from 211.72.252.243

Deny from 211.72.252.49

Deny from 212.98.78.29

Deny from 216.250.80.67

Deny from 220.135.237.66

Deny from 220.135.254.94

Deny from 221.169.30.130

Deny from 61.59.121.2

Deny from 64.208.8.196

Deny from 64.62.168.160

Deny from 64.62.168.173

Deny from 66.234.139.204

Deny from 66.234.139.205

Deny from 66.234.139.206

Deny from 66.234.139.207

Deny from 66.234.139.208

Deny from 66.234.139.209

Deny from 66.234.139.212

Deny from 66.234.139.213

Deny from 66.234.139.214

Deny from 66.234.139.215

Deny from 66.234.139.216

Deny from 66.234.139.218

Deny from 66.237.60

Deny from 66.7.131.130

Deny from 66.7.131.131

Deny from 66.7.131.132

Deny from 66.7.131.133

Deny from 66.7.131.134

Deny from 66.7.131.135

Deny from 66.7.131.136

Deny from 66.7.131.137

Deny from 66.7.131.138

Deny from 66.7.131.139

Deny from 66.7.131.140

Deny from 66.7.131.141

Deny from 66.7.131.142

Deny from 66.7.131.143

Deny from 66.7.131.144

Deny from 66.7.131.145

Deny from 66.7.131.146

Deny from 66.7.131.147

Deny from 66.7.131.148

Deny from 66.7.131.149

Deny from 66.7.131.150

Deny from 66.7.131.151

Deny from 66.7.131.152

Deny from 66.7.131.153

Deny from 66.7.131.154

Deny from 66.7.131.155

Deny from 66.7.131.156

Deny from 66.7.131.157

Deny from 66.7.131.158

Deny from 66.7.131.159

Deny from 66.7.131.160

Deny from 66.7.131.161

Deny from 66.7.131.162

Deny from 66.7.131.163

Deny from 66.7.131.164

Deny from 66.7.131.165

Deny from 204.138.115.2

Deny from 213.239.197.150

Deny from 213.239.206.109

Deny from 213.215.133.19

Deny from 212.69.208.31

Deny from 213.242.179.43

Deny from 217.75.104.23

Deny from 217.75.104.26

Deny from 67.212.188.154

Deny from 184.154.196.90

Deny from 184.154.139.16

Deny from 173.236.59.218

Deny from 95.85.8.153

Deny from 209.85.32.23

Deny from 217.212.224.141

Deny from 217.212.224.142

Deny from 217.212.224.143

Deny from 217.212.224.144

Deny from 217.212.224.145

Deny from 217.212.224.146

Deny from 217.212.224.147

Deny from 217.212.224.148

Deny from 217.212.224.149

Deny from 217.212.224.159

Deny from 217.212.224.162

Deny from 217.212.224.164

Deny from 217.212.224.165

Deny from 217.212.224.168

Deny from 217.212.224.177

Deny from 217.212.224.178

Deny from 62.119.21.136

Deny from 62.119.21.132

Deny from 62.119.21.135

Deny from 62.119.21.137

Deny from 62.119.21.138

Deny from 62.119.21.139

Deny from 62.119.21.150

Deny from 62.119.21.157

Deny from 62.119.133.11

Deny from 62.119.133.12

Deny from 62.119.133.13

Deny from 62.119.133.14

Deny from 63.223.65.253

Deny from 83.140.161.141

Deny from 83.140.161.142

Deny from 128.109.136.132

Deny from 195.120.233.1

Deny from 209.116.70.46

Deny from 24.106.39.250

Deny from 161.58.207.17

Deny from 216.218.130.79

Deny from 216.218.155.2

Deny from 216.218.197.2

Deny from 207.87.8.78

Deny from 207.87.10.33

Deny from 212.27.33.160

Deny from 212.27.33.161

Deny from 212.27.33.162

Deny from 212.27.33.163

Deny from 212.27.33.164

Deny from 212.27.33.165

Deny from 212.27.33.166

Deny from 212.27.33.167

Deny from 212.27.33.168

Deny from 212.27.33.169

Deny from 212.27.41.11

Deny from 212.27.41.14

Deny from 212.27.41.22

Deny from 212.27.41.23

Deny from 212.27.41.24

Deny from 212.27.41.25

Deny from 212.27.41.26

Deny from 212.27.41.30

Deny from 212.27.41.31

Deny from 212.27.41.33

Deny from 212.27.41.34

Deny from 212.27.41.35

Deny from 212.27.41.36

Deny from 212.27.41.37

Deny from 212.27.41.38

Deny from 212.27.41.39

Deny from 212.27.41.40

Deny from 212.27.41.41

Deny from 195.186.149.91

Deny from 209.10.169.15

Deny from 209.10.169.16

Deny from 209.10.169.17

Deny from 209.20.44.236

Deny from 67.18.87.100

Deny from 209.203.226.174

Deny from 193.12.151.201

Deny from 154.15.28.143

Deny from 69.225.183.82

Deny from 212.78.64.35

Deny from 217.158.17.25

Deny from 80.60.157.168

Deny from 84.82.133.41

Deny from 69.28.130.222

Deny from 69.28.130.229

Deny from 69.28.130.230

Deny from 69.28.130.231

Deny from 216.104.145.71

Deny from 81.19.66.9

Deny from 81.19.66.6

Deny from 81.19.66.39

Deny from 81.176.67.106

Deny from 81.19.66.8

Deny from 81.19.67.34

Deny from 81.19.66.42

Deny from 81.19.66.38

Deny from 81.222.64.10

Deny from 81.19.66.74

Deny from 81.19.67.253

Deny from 81.19.67.247

Deny from 203.87.123.139

Deny from 63.251.238.8

Deny from 216.86.229.85

Deny from 216.86.229.86

Deny from 66.45.38.86

Deny from 66.55.143.162

Deny from 80.229.145.226

Deny from 80.229.216.40

Deny from 83.146.31.19

Deny from 212.158.198.8

Deny from 212.158.235.113

Deny from 212.158.249.0

Deny from 212.158.251.24

Deny from 212.172.94.128

Deny from 206.215.122.20

Deny from 216.255.229.246

Deny from 64.124.122.228

Deny from 209.254.2.2

Deny from 124.32.246.45

Deny from 64.140.165.132

Deny from 64.140.165.133

Deny from 64.140.165.139

Deny from 66.93.156.38

Deny from 66.93.156.39

Deny from 208.234.1.83

Deny from 208.145.190.250

Deny from 208.145.190.251

Deny from 208.145.190.254

Deny from 195.141.85.115

Deny from 195.141.85.116

Deny from 195.141.85.142

Deny from 195.141.85.146

Deny from 194.201.93.6

Deny from 194.201.93.18

Deny from 194.201.93.118

Deny from 206.40.146.58

Deny from 208.148.122.27

Deny from 208.148.122.28

Deny from 208.148.122.29

Deny from 81.169.136.109

Deny from 205.237.206.30

Deny from 208.165.96.26

Deny from 208.111.154.15

Deny from 208.111.154.16

Deny from 208.111.154.27

Deny from 64.202.100.84

Deny from 206.129.98.7

Deny from 206.129.98.16

Deny from 206.129.98.19

Deny from 206.129.0.3

Deny from 206.129.0.131

Deny from 206.129.0.132

Deny from 206.129.1.24

Deny from 206.129.1.27

Deny from 216.24.32.42

Deny from 24.90.243.203

Deny from 81.92.97.41

Deny from 84.73.59.129

Deny from 216.205.148.106

Deny from 82.42.115.108

Deny from 64.151.82.12

Deny from 195.27.115.50

Deny from 195.27.215.70

Deny from 195.27.215.89

Deny from 195.27.215.91

Deny from 195.27.215.92

Deny from 212.114.209.250

Deny from 133.9.222.37

Deny from 66.151.181.4

Deny from 66.151.181.10

Deny from 70.42.51.30

Deny from 77.75.73.123

Deny from 212.80.76.87

Deny from 38.98.120.85

Deny from 8.11.2.19

Deny from 8.11.2.95

Deny from 63.251.10.139

Deny from 63.251.169.236

Deny from 64.12.186.194

Deny from 64.12.186.197

Deny from 64.12.186.198

Deny from 64.12.186.199

Deny from 64.12.186.201

Deny from 64.12.186.203

Deny from 64.12.186.206

Deny from 64.12.186.207

Deny from 64.12.186.208

Deny from 64.12.186.209

Deny from 206.253.222.233

Deny from 65.110.1.7

Deny from 65.110.21.171

Deny from 149.99.7.152

Deny from 67.15.42.16

Deny from 128.121.225.20

Deny from 207.16.241

Deny from 146.186.148.76

Deny from 38.98.19.100

Deny from 38.98.19.101

Deny from 38.98.19.102

Deny from 38.98.19.103

Deny from 38.98.19.104

Deny from 38.98.19.105

Deny from 38.98.19.106

Deny from 38.98.19.107

Deny from 38.98.19.108

Deny from 38.98.19.109

Deny from 38.98.19.110

Deny from 38.98.19.111

Deny from 38.98.19.112

Deny from 38.98.19.113

Deny from 38.98.19.114

Deny from 38.98.19.115

Deny from 38.98.19.116

Deny from 38.98.19.117

Deny from 38.98.19.118

Deny from 38.98.19.121

Deny from 38.98.19.122

Deny from 38.98.19.123

Deny from 38.98.19.124

Deny from 38.98.19.125

Deny from 38.98.19.126

Deny from 38.98.19.66

Deny from 38.98.19.67

Deny from 38.98.19.68

Deny from 38.98.19.69

Deny from 38.98.19.70

Deny from 38.98.19.71

Deny from 38.98.19.75

Deny from 38.98.19.76

Deny from 38.98.19.77

Deny from 38.98.19.79

Deny from 38.98.19.81

Deny from 38.98.19.83

Deny from 38.98.19.85

Deny from 38.98.19.88

Deny from 38.98.19.89

Deny from 38.98.19.90

Deny from 38.98.19.91

Deny from 38.98.19.92

Deny from 38.98.19.93

Deny from 38.98.19.94

Deny from 38.98.19.96

Deny from 38.98.19.97

Deny from 38.98.19.98

Deny from 38.98.19.99

Deny from 64.211.62.5

Deny from 66.234.139.194

Deny from 66.234.139.197

Deny from 66.234.139.198

Deny from 66.234.139.199

Deny from 66.234.139.201

Deny from 66.234.139.202

Deny from 66.234.139.203

Deny from 66.234.139.210

Deny from 66.234.139.211

Deny from 66.234.139.217

Deny from 66.234.139.220

Deny from 203.89.255.8

Deny from 220.181.61.231

Deny from 220.181.61.234

Deny from 61.135.130.77

Deny from 61.135.130.78

Deny from 61.135.130.79

Deny from 61.135.130.80

Deny from 61.135.130.100

Deny from 61.135.131.118

Deny from 61.135.131.125

Deny from 61.135.131.128

Deny from 61.135.131.163

Deny from 61.135.131.166

Deny from 61.135.131.171

Deny from 61.135.131.173

Deny from 61.135.131.174

Deny from 61.135.131.207

Deny from 61.135.131.209

Deny from 61.135.131.214

Deny from 61.135.131.230

Deny from 61.135.131.233

Deny from 61.135.131.235

Deny from 61.135.131.237

Deny from 61.135.131.238

Deny from 220.181.19.103

Deny from 220.181.19.164

Deny from 220.181.19.171

Deny from 220.181.19.177

Deny from 220.181.19.65

Deny from 220.181.19.87

Deny from 220.181.26.102

Deny from 220.181.26.106

Deny from 220.181.26.111

Deny from 220.181.26.113

Deny from 220.181.26.121

Deny from 220.181.26.73

Deny from 220.181.26.74

Deny from 194.197.68.46

Deny from 58.61.164.140

Deny from 194.97.8.162

Deny from 194.97.8.163

Deny from 192.109.251.26

Deny from 194.221.132.56

Deny from 194.221.132.139

Deny from 128.211.213.117

Deny from 207.44.130.81

Deny from 207.44.142.84

Deny from 209.150.128.145

Deny from 216.71.84.57

Deny from 216.71.84.212

Deny from 216.71.187.134

Deny from 38.100.225.3

Deny from 38.100.225.4

Deny from 38.100.225.5

Deny from 38.100.225.6

Deny from 38.100.225.7

Deny from 38.100.225.8

Deny from 38.100.225.9

Deny from 38.100.225.10

Deny from 38.100.225.11

Deny from 38.100.225.12

Deny from 38.100.225.13

Deny from 38.100.225.14

Deny from 38.100.225.15

Deny from 38.100.225.16

Deny from 38.100.225.17

Deny from 38.100.225.18

Deny from 38.100.225.19

Deny from 38.100.225.20

Deny from 38.100.225.21

Deny from 38.100.225.22

Deny from 38.100.225.23

Deny from 38.100.225.24

Deny from 38.100.225.25

Deny from 38.100.225.26

Deny from 198.147.135.13

Deny from 165.121.1.77

Deny from 165.121.2.77

Deny from 198.185.1.224

Deny from 194.231.30.15

Deny from 209.203.234.4

Deny from 207.77.90.17

Deny from 66.163.18.197

Deny from 66.177.183.22

Deny from 195.20.227.67

Deny from 69.141.14.141

Deny from 162.33.251.50

Deny from 207.8.212.162

Deny from 207.8.212.163

Deny from 66.28.248.146

Deny from 81.208.26.55

Deny from 62.181.185.37

Deny from 62.181.185.44

Deny from 193.218.115.6

Deny from 193.218.115.7

Deny from 193.218.115.8

Deny from 193.218.115.81

Deny from 193.218.115.254

Deny from 194.181.35.5

Deny from 194.181.35.6

Deny from 213.134.142.22

Deny from 213.134.142.50

Deny from 217.160.254.242

Deny from 212.97.42.229

Deny from 209.128.80.131

Deny from 209.128.80.133

Deny from 209.128.80.136

Deny from 24.6.176.192

Deny from 63.251.4.43

Deny from 198.49.220.81

Deny from 206.183.1.74

Deny from 207.218.150.79

Deny from 208.51.0.20

Deny from 208.51.0.74

Deny from 208.51.0.79

Deny from 195.130.233.22

Deny from 195.130.233.30

Deny from 195.130.233.60

Deny from 212.185.44.13

Deny from 81.152.64.189

Deny from 194.151.1.60

Deny from 146.82.72.23

Deny from 146.82.72.24

Deny from 132.239.50.245

Deny from 81.27.96.248

Deny from 81.27.99.141

Deny from 217.151.96.52

Deny from 195.137.7.76

Deny from 213.177.232.41

Deny from 38.119.96.100

Deny from 38.119.96.103

Deny from 38.119.96.107

Deny from 38.119.96.110

Deny from 38.119.96.114

Deny from 38.119.96.115

Deny from 38.119.96.116

Deny from 38.119.96.117

Deny from 38.119.96.118

Deny from 38.119.96.119

Deny from 38.119.96.120

Deny from 38.119.96.121

Deny from 209.67.119.9

Deny from 133.9.215.72

Deny from 133.9.215.87

Deny from 202.83.221.219

Deny from 210.17.245.180

Deny from 210.17.245.191

Deny from 193.172.236.108

Deny from 193.172.237.17

Deny from 193.172.236.114

Deny from 193.172.237.16

Deny from 193.172.236.8

Deny from 128.2.206.215

Deny from 72.249.60.74

Deny from 193.252.118.101

Deny from 193.252.118.102

Deny from 193.252.118.188

Deny from 193.252.118.190

Deny from 193.252.121.229

Deny from 193.252.148.208

Deny from 193.252.148.209

Deny from 193.252.148.51

Deny from 193.252.149.20

Deny from 195.101.94.80

Deny from 195.101.94.81

Deny from 195.101.94.15

Deny from 195.101.94.101

Deny from 195.101.94.166

Deny from 195.101.94.208

Deny from 195.101.94.209

Deny from 209.185.188.207

Deny from 216.35.76.11

Deny from 81.52.143.15

Deny from 81.52.143.16

Deny from 64.95.2.212

Deny from 216.104.145.2

Deny from 216.104.145.160

Deny from 212.127.141.18

Deny from 212.58.162.42

Deny from 212.58.162.78

Deny from 212.58.169.133

Deny from 212.58.169.181

Deny from 213.73.161.41

Deny from 213.73.177.37

Deny from 213.73.197.30

Deny from 213.73.210.224

Deny from 213.73.211.74

Deny from 213.73.211.172

Deny from 213.10.10.117

Deny from 213.10.10.118

Deny from 80.60.35.143

Deny from 81.205.39.64

Deny from 82.217.42.23

Deny from 84.104.216.167

Deny from 84.104.217.36

Deny from 84.104.217.38

Deny from 84.104.39.226

Deny from 199.182.120.206

Deny from 193.136.20.2

Deny from 193.136.20.250

Deny from 198.3.99.101

Deny from 206.191.49.69

Deny from 194.45.170.120

Deny from 65.105.223.11

Deny from 61.139.65.222

Deny from 144.214.122.55

Deny from 66.180.173.42

Deny from 62.75.193.84

Deny from 203.51.46.83

Deny from 203.51.44.181

Deny from 217.73.164.106

Deny from 62.96.181.197

Deny from 212.111.41.2

Deny from 212.111.41.33

Deny from 212.111.41.34

Deny from 212.111.41.35

Deny from 212.111.41.36

Deny from 212.111.41.52

Deny from 212.111.41.53

Deny from 212.111.41.151

Deny from 212.111.41.154

Deny from 212.111.41.153

Deny from 212.111.41.152

Deny from 212.135.14.4

Deny from 202.139.99.130

Deny from 202.139.99.131

Deny from 202.139.99.131

Deny from 210.8.18.66

Deny from 203.9.252.2

Deny from 67.67.130.238

Deny from 209.69.255.132

Deny from 209.69.255.131

Deny from 209.69.255.160

Deny from 63.173.190.2

Deny from 63.173.190.16

Deny from 63.173.190.30

Deny from 63.173.190.152

Deny from 63.225.238.7

Deny from 63.225.238.11

Deny from 216.250.143.106

Deny from 216.250.143.102

Deny from 208.1.109.130

Deny from 63.140.184.187

Deny from 192.41.47.46

Deny from 209.19.244.162

Deny from 63.140.184.168

Deny from 63.140.184.171

Deny from 63.140.184.172

Deny from 205.230.7.23

Deny from 207.178.193.51

Deny from 194.109.125.201

Deny from 212.19.205.147

Deny from 64.241.243.123

Deny from 64.241.242.177

Deny from 64.241.243.65

Deny from 64.241.243.124

Deny from 64.242.88.10

Deny from 64.242.88.50

Deny from 64.242.88.60

Deny from 65.116.145.141

Deny from 65.113.96.174

Deny from 65.116.145

Deny from 66.35.208.59

Deny from 66.35.208.60

Deny from 66.35.208.112

Deny from 66.35.208.158

Deny from 66.35.208.160

Deny from 66.35.208.206

Deny from 66.35.208.210

Deny from 66.35.208.211

Deny from 208.232.154.64

Deny from 209.249.66.10

Deny from 209.249.66.26

Deny from 209.249.66.36

Deny from 209.249.67.101

Deny from 209.249.67.102

Deny from 209.249.67.103

Deny from 209.249.67.104

Deny from 209.249.67.105

Deny from 209.249.67.106

Deny from 209.249.67.107

Deny from 209.249.67.108

Deny from 209.249.67.109

Deny from 209.249.67.110

Deny from 209.249.67.111

Deny from 209.249.67.112

Deny from 209.249.67.113

Deny from 209.249.67.114

Deny from 209.249.67.115

Deny from 209.249.67.116

Deny from 209.249.67.117

Deny from 209.249.67.118

Deny from 209.249.67.119

Deny from 209.249.67.120

Deny from 209.249.67.121

Deny from 209.249.67.122

Deny from 209.249.67.125

Deny from 209.249.67.126

Deny from 209.249.67.127

Deny from 209.249.67.128

Deny from 209.249.67.129

Deny from 209.249.67.130

Deny from 209.249.67.131

Deny from 209.249.67.132

Deny from 209.249.67.133

Deny from 209.249.67.134

Deny from 209.249.67.135

Deny from 209.249.67.136

Deny from 209.249.67.137

Deny from 209.249.67.138

Deny from 209.249.67.139

Deny from 209.249.67.140

Deny from 209.249.67.141

Deny from 209.249.67.142

Deny from 209.249.67.143

Deny from 209.249.67.144

Deny from 210.109.141.5

Deny from 216.34.42.12

Deny from 216.34.42.14

Deny from 216.34.42.36

Deny from 216.34.42.38

Deny from 216.34.42.42

Deny from 216.34.42.47

Deny from 216.34.42.54

Deny from 216.34.42.55

Deny from 216.34.42.56

Deny from 216.34.42.57

Deny from 216.34.42.59

Deny from 216.34.42.110

Deny from 216.34.42.111

Deny from 216.34.42.112

Deny from 216.34.42.113

Deny from 216.34.42.114

Deny from 216.34.42.115

Deny from 216.34.42.116

Deny from 216.34.42.117

Deny from 216.34.42.171

Deny from 216.34.42.172

Deny from 216.34.42.173

Deny from 216.34.42.176

Deny from 216.34.42.210

Deny from 216.34.42.211

Deny from 216.34.42.212

Deny from 216.34.42.213

Deny from 216.34.42.214

Deny from 216.34.42.215

Deny from 216.34.42.216

Deny from 216.34.42.217

Deny from 216.88.158.142

Deny from 212.172.247.162

Deny from 209.78.25.59

Deny from 62.13.25.237

Deny from 207.153.39.132

Deny from 207.153.23.8

Deny from 80.237.184.66

Deny from 80.237.202.146

Deny from 128.138.236.20

Deny from 81.5.184.25

Deny from 129.187.148.160

Deny from 129.187.148.161

Deny from 129.187.148.162

Deny from 129.187.148.163

Deny from 129.187.148.164

Deny from 129.187.148.165

Deny from 70.86.206.170

Deny from 203.96.111.201

Deny from 213.186.46.88

Deny from 77.88.25.28

Deny from 213.180.193

Deny from 213.180.194

Deny from 213.180.206

Deny from 213.180.207

Deny from 213.180.210

Deny from 213.180.216

Deny from 213.180.217

Deny from 77.88.27.26

Deny from 77.88.26.26

Deny from 87.250.230.33

Deny from 93.158.148.31

Deny from 93.158.149.32

Deny from 93.158.151.24

Deny from 95.108.156.251

Deny from 95.108.150.235

Deny from 91.205.124.3

Deny from 208.197.37.29

Deny from 60.191.80.26

Deny from 60.191.80.27

Deny from 60.191.80.28

Deny from 60.191.80.31

Deny from 60.191.80.34

Deny from 60.191.80.35

Deny from 60.191.80.37

Deny from 60.191.80.38

Deny from 60.191.80.39

Deny from 60.191.80.40

Deny from 60.191.80.43

Deny from 60.191.80.44

Deny from 60.191.80.77

Deny from 61.135.219.13

Deny from 61.135.220.152

Deny from 61.135.249.203

Deny from 61.135.249.216

Deny from 130.245.134.62

Deny from 130.245.134.63

Deny from 130.245.134.64

Deny from 133.11.36.24

Deny from 133.11.36.25

Deny from 133.11.36.26

Deny from 133.11.36.28

Deny from 133.11.36.32

Deny from 133.11.36.34

Deny from 133.11.36.36

Deny from 133.11.36.37

Deny from 133.11.36.38

Deny from 133.11.36.39

Deny from 133.11.36.41

Deny from 133.11.36.42

Deny from 133.11.36.43

Deny from 133.11.36.44

Deny from 133.11.36.45

Deny from 133.11.36.46

Deny from 133.11.36.47

Deny from 133.11.36.48

Deny from 133.11.36.50

Deny from 133.11.36.51

Deny from 133.11.36.52

Deny from 133.11.36.54

Deny from 133.11.36.55

Deny from 208.68.136.5

Deny from 208.68.138.5

Deny from 70.42.51.11

Deny from 65.197.137.32

Deny from 65.197.137.34

Deny from 65.197.137.35

Deny from 65.197.137.37

Deny from 65.219.130.20

Deny from 65.219.130.21

Deny from 65.219.130.240

Deny from 65.219.130.241

Deny from 69.20.190.201

Deny from 67.108.223.130

Deny from 216.55.128.47

Deny from crawl8-public.alexa.com

Deny from 209.247.40.99

Deny from wfp2.almaden.ibm.com

Deny from 198.4.83.49

Deny from 63.148.99.*

Deny from 64.222.18.44

Deny from 62.58.2.5

Deny from 210.128.142.42

Deny from 64.210.196.195

Deny from 64.210.196.198

Deny from 211.154.211.209

Deny from 66.94.35.20

Deny from 208.128.7.215

Deny from 64.81.243.66

Deny from 64.133.109.250

Deny from 211.101.236.91

Deny from 211.101.236.162

Deny from 212.1.26.100

Deny from 213.97.108.143

Deny from 63.212.171.171

Deny from 64.158.138.48

Deny from 198.139.155.7

Deny from 198.139.155.32

Deny from 198.185.18.207

Deny from 209.167.50.22

Deny from 209.167.50.25

Deny from 24.126.133.124

Deny from 204.62.226.36

Deny from 206.190.171.174

Deny from 206.190.171.175

Deny from 66.28.20.194

Deny from 66.28.44.122

Deny from 66.28.44.123

Deny from 66.28.44.125

Deny from 66.28.68.234

Deny from 66.28.68.235

Deny from 66.28.68.236

Deny from 66.28.68.237

Deny from 195.166.231.3

Deny from crawler918.com

Deny from 12.40.85

Deny from 12.148.209.196

Deny from google.com

Deny from 64.233.191.255

Deny from NS2.GOOGLE.COM

Deny from NS3.GOOGLE.COM

Deny from NS4.GOOGLE.COM

Deny from NS1.GOOGLE.COM

Deny from 64.233.160.0/19

Deny from 64.233.160.0

Deny from 64.233.172.6

Deny from 84.14.214.213

Deny from 93.173

Deny from netvision.net.il

Deny from bb.netvision.net.il

Deny from 93.173.13.159

Deny from 93.173.0.234

Deny from 109-186-17-76

Deny from 184.154.103.183

Deny from 66.102.13

Deny from 66.249.67

Deny from 195.128.18.19

Deny from 65.55

Deny from 78.228.204.183

Deny from 93.172.186.174

Deny from 219.117.238.170

Deny from 69.90.30.235

Deny from 87.249.110.180

Deny from 91.218.224.5

Deny from 65.17.253.220

Deny from 81.161.59.17

Deny from 5.135.90.203

Deny from 5.9.185.20

Deny from 185.65.135.227

Deny from 188.166.112.213

Deny from 104.131.165.123

Deny from 207.244.70.35

Deny from 77.93.203.34

Deny from 94.242.228.108

Deny from 72.52.75.27

Deny from 104.131.157.171

Deny from 95.85.8.153

Deny from 85.137.167.203

Deny from 46.101.249.238

Deny from 193.124.181.129

Deny from 104.42.198.99

Deny from 91.231.212.111

Deny from 91.231.212.111

Deny from 91.231.212.111

Deny from 173.224.162.93

Deny from 87.106.251.235

Deny from 167.160.98.230

Deny from 177.39.232.144

Deny from 197.41.75.228

Deny from 177.39.232.144

Deny from 41.137.57.25

Deny from 70.194.4.186

Deny from 185.100.86.100

Deny from 158.106.67.165

Deny from 64.74.215.59

Deny from 88.198.40.5

Deny from 213.254.241.6

Deny from 64.246.166.73

Deny from 65.103.220.138

Deny from 204.229.99.250

Deny from 204.134.208.5

Deny from 64.246.187.77

Deny from 64.246.166.136

Deny from 64.246.187.81

Deny from 64.246.162.212

Deny from 204.228.197.160

Deny from 204.229.125.169

Deny from 204.229.100.74

Deny from 157.93.242.50

Deny from 207.102.138.158

Deny from 195.214.79.20

Deny from 209.157.66.253

Deny from 8.37.217.217

Deny from 87.249.110.180

Deny from 203.188.221.98

Deny from 173.224.162.93

Deny from 133.11.204.134

Deny from 133.11.204.134

Deny from 208.184.112.74

Deny from 219.117.238.170

Deny from 219.117.238.170

Deny from 219.117.238.170

Deny from 87.249.110.180

Deny from 173.224.162.93

Deny from 62.141.65.90

Deny from 133.11.204.134

Deny from 8.37.217.217

Deny from 87.249.110.180

Deny from 209.112.251.101

Deny from 213.254.241.6

Deny from 8.37.217.217

Deny from 73.219.221.183

Deny from 173.224.162.93

Deny from 83.9.103.152

Deny from 83.215.169.226

Deny from 38.122.73.38

Deny from 173.224.162.93

Deny from 5.9.185.20

Deny from 104.200.151.20

Deny from 176.9.7.253

Deny from 147.208.15.13

Deny from 216.182.214.7

Deny from 207.200.81.145

Deny from zeus.nj.nec.com

Deny from 138.15.164.9

Deny from 212.253.129.11

Deny from 64.69.79.210

Deny from panchma.tivra.com

Deny from 207.140.168.143

Deny from 207.140.168.146

Deny from tracerlock.com

Deny from 209.61.182.37

Deny from 146.48.78.32

Deny from 146.48.78.38

Deny from 209.73.228.163

Deny from 209.73.228.167

Deny from xs4.kso.co.uk

Deny from 207.235.6.157

Deny from 66.221.171.1

Deny from 64.14.241.54

Deny from pixnat06.whizbang.com

Deny from 63.173.190.16

Deny from pixnat09.whizbang.com

Deny from 63.173.190.19

Deny from 212.73.246.73

Deny from 212.73.246.71

Deny from morgue1.corp.yahoo.com

Deny from 216.145.54.35

Deny from hanta.yahoo.com

Deny from 216.145.50.40

Deny from 64.241.242.11

Deny from 64.241.243.32

Deny from 64.241.243.65

Deny from 64.241.243.66

Deny from 212.12.114.*

Deny from 213.160.90.*

Deny from *.abuse.ch


Options -Indexes  
##Off to the Mouse they go##

</body>
</html>