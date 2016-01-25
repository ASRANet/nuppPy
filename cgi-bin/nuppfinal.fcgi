#!/usr/bin/python
import sys, os

basepath = 'nuclearpowerplantconference.com/kunden/homepages/13/d609847479/htdocs'

sys.path.insert(0, os.path.join(BASE_DIR, '/.local/lib'))
sys.path.insert(0, os.path.join(BASE_DIR, '/www/nuppFinal'))

os.environ['DJANGO_SETTINGS_MODULE'] = 'nuppFinal.settings'

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method='threaded', daemonize='false')