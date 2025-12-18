# UTM Tracking Implementation - Complete

## ✅ Implementation Status: COMPLETE

The comprehensive UTM tracking system has been successfully implemented for the Kidzonia International website.

---

## Files Created

1. **`assets/js/utm-tracker.js`** ✅
   - JavaScript UTM tracker that captures parameters from URL
   - Stores in localStorage and cookies (30-day persistence)
   - Captures external referer information
   - Detects source platforms (Facebook, Instagram, WhatsApp, Google, etc.)
   - Sends data to PHP endpoint via AJAX

---

## Files Modified

### 1. **`application/controllers/Home.php`** ✅
   - Enhanced `capture_utm()` method
   - Now handles POST data from JavaScript
   - Properly stores external referer (not internal navigation)
   - Stores all UTM parameters in session
   - Returns JSON response

### 2. **`application/models/Crud_model.php`** ✅
   - Added `send_tracking_notification_email()` method
   - Sends detailed email notifications with complete UTM tracking information
   - Updated `check_admission_enquiry()` method
   - Enhanced referer tracking logic
   - Added email notification call after form submission
   - Properly captures and stores referrer_url

### 3. **`application/config/config.php`** ✅
   - Added `tracking_notification_email` configuration
   - Set to: `info@kidzoniainternational.in`

### 4. **`application/views/frontend/default/footer.php`** ✅
   - Added UTM tracker script inclusion
   - Script loads early to capture parameters

---

## Features Implemented

✅ **UTM Parameter Capture**
- Captures: `utm_source`, `utm_medium`, `utm_campaign`, `utm_term`, `utm_content`, `utm_id`
- From URL query string
- Stores in session and localStorage/cookies

✅ **Referer Tracking**
- Captures external referer only (not internal navigation)
- Persists original referer across page navigation
- Stores referer domain separately

✅ **Platform Detection**
- Auto-detects: Facebook, Instagram, WhatsApp, Google, Bing, Yahoo
- Uses detected source if no UTM source provided

✅ **Persistence**
- 30-day cookie/localStorage storage
- Session storage for form submission
- Survives page navigation

✅ **Email Notifications**
- Sends detailed tracking email with:
  - All UTM parameters
  - Referer URL and domain
  - Form submission details
  - IP address
  - Submission timestamp

✅ **Database Storage**
- Stores all UTM parameters in `admission_enquiry` table
- Stores all UTM parameters in `leads` table
- Includes `referrer_url` and `site_name`

---

## How It Works

1. **User arrives** with UTM parameters in URL
   ```
   https://www.kidzoniainternational.in/admissions?utm_source=facebook&utm_campaign=summer_admission
   ```

2. **JavaScript captures** UTM parameters from URL
   - Stores in localStorage/cookies
   - Sends to `/home/capture_utm` endpoint

3. **PHP stores** in CodeIgniter session
   - External referer is captured and stored
   - UTM parameters stored for later use

4. **User navigates** to form page
   - UTM parameters persist in session
   - Referer remains from original source

5. **User submits form**
   - Form handler reads UTM from session
   - Saves to database with tracking data
   - Sends email notification with complete tracking info

---

## Testing Checklist

- [ ] Test with UTM parameters in URL
- [ ] Test external referer capture (Facebook, Google, etc.)
- [ ] Test internal navigation (should not overwrite external referer)
- [ ] Test form submission saves UTM data
- [ ] Test email notification received
- [ ] Test database storage of tracking data
- [ ] Test direct traffic (no UTM parameters)
- [ ] Test UTM persistence across page navigation

---

## Example UTM URLs

### Facebook Ads
```
https://www.kidzoniainternational.in/admissions?utm_source=facebook&utm_medium=cpc&utm_campaign=summer_admission&utm_content=video_ad&utm_id=fb_123456
```

### Google Ads
```
https://www.kidzoniainternational.in/admissions?utm_source=google&utm_medium=cpc&utm_campaign=admission_2026&utm_term=school%20admission&utm_content=text_ad&utm_id=google_789012
```

### Instagram Ads
```
https://www.kidzoniainternational.in/admissions?utm_source=instagram&utm_medium=cpc&utm_campaign=summer_admission&utm_content=carousel_ad&utm_id=ig_456789
```

### WhatsApp Links
```
https://www.kidzoniainternational.in/admissions?utm_source=whatsapp&utm_medium=social&utm_campaign=parent_referral&utm_content=message_link
```

---

## Database Columns

The following columns should exist in your database tables:

### `admission_enquiry` table:
- `utm_source` VARCHAR(255)
- `utm_medium` VARCHAR(255)
- `utm_campaign` VARCHAR(255)
- `utm_term` VARCHAR(255)
- `utm_content` VARCHAR(255)
- `utm_id` VARCHAR(255)
- `referrer_url` TEXT

### `leads` table:
- `utm_source` VARCHAR(255)
- `utm_medium` VARCHAR(255)
- `utm_campaign` VARCHAR(255)
- `utm_term` VARCHAR(255)
- `utm_content` VARCHAR(255)
- `utm_id` VARCHAR(255)
- `referrer_url` TEXT
- `site_name` VARCHAR(255)

---

## Configuration

### Email Notification
- **Location**: `application/config/config.php`
- **Config Key**: `tracking_notification_email`
- **Current Value**: `info@kidzoniainternational.in`

To change the notification email, update this value in `config.php`.

---

## Next Steps (Optional)

1. **Add loading states** to form buttons to prevent multiple submissions
2. **Extend to other forms** (Contact, Callback, Summer Camp, etc.)
3. **Create dashboard/reporting** to view UTM tracking data
4. **Add analytics integration** (Google Analytics, Facebook Pixel, etc.)

---

## Notes

- UTM parameters persist for 30 days via cookies/localStorage
- Only external referers are captured (internal navigation is ignored)
- Email notifications include complete tracking information
- Site name is saved as "Kidzonia International" for reporting
- All tracking data is stored in both local and remote database tables

---

## Support

For questions or issues, refer to:
- UTM Tracker JavaScript: `assets/js/utm-tracker.js`
- PHP Endpoint: `application/controllers/Home.php` → `capture_utm()`
- Email Notification: `application/models/Crud_model.php` → `send_tracking_notification_email()`

---

*Implementation Date: December 11, 2025*
*Status: ✅ Complete and Ready for Testing*






