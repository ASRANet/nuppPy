#!/usr/bin/python
import sys, os

basepath = 'nuclearpowerplantconference.com/kunden/homepages/13/d609847479/htdocs/www'

sys.path.insert(0, basepath + '/.local/lib')
sys.path.insert(0, basepath + 'www/nuppPy')

os.environ['DJANGO_SETTINGS_MODULE'] = 'nuppfinal.settings'

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method='threaded', daemonize='false')