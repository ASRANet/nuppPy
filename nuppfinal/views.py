from django.shortcuts import render


def index(request):
    return render(request, 'index/index.html')


def venue(request):
    return render(request, 'index/venue.html')


def accomodation(request):
    return render(request, 'index/accomodation.html')


def contactus(request):
    return render(request, 'index/contactUs.html')


def travel(request):
    return render(request, 'index/travel.html')

