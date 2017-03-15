[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/SnapCXShippingTracking/functions?utm_source=RapidAPIGitHub_SnapCXShippingTrackingFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# SnapCXShippingTracking Package
Get real-time shipping tracking status across carriers.
* Domain: snapcx.io
* Credentials: apiKey

## How to get credentials: 
0. Go to [SnapCX website](https://snapcx.io/) 
1. Log in or create a new account
2. Go to [Dashboard page](https://developer.snapcx.io/admin/applications) to get your API key

## SnapCXShippingTracking.getTrackingDetails
This API end point is for validating US addresses only.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Api key obtained from SnapCX
| carrier| String     | Shipper Carrier code (UPS or USPS or FEDEX or DHL Or CAN (Canada Post) OR use AUTO for automatic detection.).
| trackId| String     | Carrier tracking number, which is being tracked.

