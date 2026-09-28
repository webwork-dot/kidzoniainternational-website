 <style>
   /* Container to hold the content and center it */
        .privacy-policy-container {
            margin: 40px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            
            
        }
        @media (max-width: 768px){
            .privacy-policy-container{
                padding: 20px;
            }
        }

        /* Main Heading Styling */
        .privacy-policy-container h1 {
            color: #004b8d; /* KCIS Primary Blue */
            font-size: 4.5rem;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 3px solid #f58220; /* KCIS Accent Orange */
            padding-bottom: 10px;
        }

        /* Section Heading Styling */
        .privacy-policy-container h2 {
            color: #004b8d; /* KCIS Primary Blue */
            font-size: 2.8rem;
            margin-top: 40px;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
        }

        /* Paragraph Styling for readability */
        .privacy-policy-container p {
            margin-bottom: 15px;
            font-size: 20px;
            color:black !important;
              font-family: "Gill Sans MT", "Gill Sans", Calibri, "Trebuchet MS", sans-serif;
        }
        
        /* List Styling */
        .privacy-policy-container ul {
            list-style-type: disc;
            padding-left: 20px;
            margin-bottom: 15px;
        }

        .privacy-policy-container li {
            margin-bottom: 10px;
            font-size:20px;
            color:black !important;
        }

        /* Link Styling */
        .privacy-policy-container a {
            color: #004b8d; /* KCIS Primary Blue */
            text-decoration: none;
        }

        .privacy-policy-container a:hover {
            text-decoration: underline;
        }

        /* Special styling for contact info */
        .contact-info {
            margin-top: 40px;
            padding: 20px;
            background-color: #f7faff;
            border-left: 4px solid #004b8d; /* KCIS Primary Blue */
            border-radius: 4px;
        }
        
        .contact-info p {
            margin-bottom: 5px;
        }

        /* Effective Date Styling */
        .effective-date {
            text-align: center;
            color: #777;
            font-style: italic;
            margin-bottom: 30px;
        }
        
        /* Strong tag styling */
        strong {
            color: #004b8d;
        }
    </style>
   <?php foreach ($data as $row): ?>
    <div>
        <?php echo $row['description']; ?>
    </div>
<?php endforeach; ?>