from django.conf.urls import url, patterns
from index import views


urlpatterns = patterns('',
                       url(r'^$', views.index, name='index'),
                       url(r'^contactUs/', views.contactus, name='contactUs'),
                       url(r'^venue/', views.venue, name='venue'),
                       url(r'^accommodation/', views.accommodation, name='accommodation'),
                       url(r'^travel/', views.travel, name='travel'),)
