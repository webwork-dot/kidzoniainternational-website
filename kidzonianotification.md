# Kidzonia International Notifications

## Admission / Contact / Callback / Download Brochure (same flow)

**Submit endpoint:** `check_admission_enquiry`  
**Handler:** `Crud_model::check_admission_enquiry`  
**Data saved in:** `admission_enquiry` (+ `kcis_db.leads`, `kcis_db.leads_log`)

---

## Forms

### `/admission-enquiry`
- Form type: `admission_enquiry`
- Notifications sent: Email + SMS + WhatsApp + tracking email

### Download Brochure (header modal)
- Modal: `modal_enquiry_download_brochure`
- Form type: `download_brochure`
- Notifications sent: Email + SMS + WhatsApp + tracking email
- Extra response: returns `download_url` = `download_brochure_url`

### `/contact-us`
- Form type: `contact_us`
- Notifications sent: Email + SMS + WhatsApp + tracking email

### Request a Callback (header/sidebar modal)
- Modal: `modal_enquiry_now`
- Form type: `callback`
- Notifications sent: Email + SMS + WhatsApp + tracking email

---

## Careers Form (separate flow)

### `/career` (Apply Job modal)
- Submit endpoint: `ajax_submit_career`
- Handler: `Crud_model::ajax_submit_career`
- Data saved in: `career_enquiry` (resume upload in `uploads/career_enquiry/...`)
- External push: `https://erp.surakaedusociety.com/panel/hr/remote_career_leads`
- Notifications from this app: None (no email / SMS / WhatsApp in this handler)

---

## Notification Providers (for `check_admission_enquiry` flow)

### 1. Email (to parent)
- **Provider:** ZeptoMail (SMTP)
- **From:** `no-reply@kidzoniainternational.in`
- **Subject:** `Thank You for Your Admission Enquiry - Kidzonia International`

### 2. SMS (to parent)
- **Provider:** Buzzify
- **Sender ID:** `KIPSES`
- **Template ID:** `1507164828388639855`

### 3. WhatsApp (to parent)
- **Provider:** Interakt
- **Template:** `kips_thanks_for_inquiry_z1`
- **Language:** `en`

### 4. Tracking Email (internal)
- **Provider:** ZeptoMail (via `Email_model::sent_simple_mail`)
- **Sent to:** `tracking_notification_email` in config
- **Current config value:** `ashutoshsingh752000@gmail.com`

---

## Legacy (not used by current main modals/pages above)

Old brochure flow:
- Endpoint: `ajax_download_brochure_enquiry`
- Table: `brochure`
- Download endpoint: `download_brochure_url`
- No email / SMS / WhatsApp in this legacy handler

Old callback OTP flow:
- Endpoints: `ajax_call_back_enquiry`, `ajax_callback_otp_enquiry`
- Table: `call_back_enquiry`
- OTP WhatsApp template via Interakt: `kidzonia_otp`
