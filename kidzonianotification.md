# Kidzonia International Notifications

## Admission / Contact / Callback / Download Brochure (same flow)

**Submit endpoint:** `check_admission_enquiry`  
**Handler:** `Crud_model::check_admission_enquiry`  
**Data saved in:** `admission_enquiry` (+ `kcis_leads.leads`, `kcis_leads.leads_log`, `kcis_leads.notifications_log`)

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
- External push: `http://panel.surakaedusociety.com/hr/remote_career_leads`
- Notifications sent: Email + WhatsApp (career thank-you)
- SMS: Template documented below (not integrated in code yet)

### Career notifications (`ajax_submit_career`)

#### 1. Email (to applicant)
- **Handler:** `Crud_model::send_career_application_email`
- **Provider:** ZeptoMail (via `Email_model::sent_simple_mail`)
- **From:** no-reply@kidzoniainternational.in
- **Subject:** Thank You for Your Career Application - Kidzonia International
- **Branded HTML:** `Email_model::sample_mail_message()` with KIPS header logo
- **Logo URL:** `https://www.kidzoniainternational.in/uploads/2023/07/kidzonia_logo.png`

#### 2. WhatsApp (to applicant)
- **Handler:** `Crud_model::send_career_application_whatsapp`
- **Provider:** Interakt
- **Template:** `kidzonia_career_inquiry`
- **Language:** en
- **Header image:** `https://www.kidzoniainternational.in/uploads/2023/07/kidzonia_logo.png`
- **Body variables:**
  - `{{1}}` — Applicant name
  - `{{2}}` — Job title (`career_name`)
  - `{{3}}` — Branch / center name
  - `{{4}}` — Website URL (`www.kidzoniainternational.in`)

#### 3. SMS (to applicant) — documented only
- **Provider:** Buzzify
- **Sender ID:** KIPSES
- **Template ID:** TBD
- **Message:**
  ```
  Dear {name}, Thank you for applying for {position} at Kidzonia International, {branch}. We have received your career application. Our HR team will contact you shortly. Visit www.kidzoniainternational.in Team KIPS
  ```

---

## Notification Providers (for `check_admission_enquiry` flow)

### 1. Email (to parent)
- **Provider:** ZeptoMail (via `Email_model::sent_simple_mail`)
- **From:** `no-reply@kidzoniainternational.in`
- **Subject:** `Thank You for Your Admission Enquiry - Kidzonia International`
- **Branded HTML:** `Email_model::sample_mail_message()` with KIPS header logo
- **Logo URL:** `https://www.kidzoniainternational.in/uploads/2023/07/kidzonia_logo.png`

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
