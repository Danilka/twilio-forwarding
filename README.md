# What is this?
If you point a Twilio number to this script, it can forward received text messages to any number of other phones.

# How to use this
1. Clone this repo to your php server of choise.
2. Go to your Twilio dashboard and change "Messaging" > "A Message Comes In" > "Webhook" to http(s)://example.com/twilio-forwarding/sms.php?to=14155555555,14154444444

Where http(s) is your http or https protocol, example.com is your domain name, and 14155555555,14154444444 are the phone numbers you want to forward messages to.
