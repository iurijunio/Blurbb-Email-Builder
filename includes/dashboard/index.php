    <div id="dashboard">
      <header>
        <h2>Invoice Builder</h1>
      </header>

      <form id="invoice_form" action="includes/utilities/send_mail.php" enctype='multipart/form-data'>
        <section>
          <h3 class="open">Profile</h3>

          <fieldset>
            <div class="subsection">
              <label for="logo_input">Upload Your Logo</label>
              <input type='file' name="logo_input" id="logo_input">

              <label for="business_name">Business Name <span class="required_asterisk">*</span></label>
              <input type='text' placeholder="Invoice-Out" name="business_name" class="text_input" data_target="business_name" required>

              <label for="website_url">Website URL</label>
              <input type='text' placeholder="www.invoice-out.com" name="website_url" class="text_input" data_target="website_url">
            </div>
          </fieldset>
        </section>

        <section>
          <h3>Design</h3>
          
          <fieldset class="hidden">
            <?php
              include('includes/dashboard/theme_picker.php'); 

              include('includes/dashboard/font_picker.php'); 

              echo '<div class="subsection">';
                $include_name = 'Primary';
                $include_prop = 'background';
                include('includes/dashboard/color_picker.php');

                $include_name = 'Primary';
                $include_prop = 'color';
                include('includes/dashboard/color_picker.php');
              echo '</div>';

              echo '<div class="subsection">';
                $include_name = 'Secondary';
                $include_prop = 'color';
                include('includes/dashboard/color_picker.php');

                $include_name = 'Secondary';
                $include_prop = 'background';
                include('includes/dashboard/color_picker.php');
              echo '</div>';
            ?>
          </fieldset>
        </section>

        <section>
          <h3>Content</h3>

          <fieldset class="hidden">
            <div class="subsection">
              <label for="heading1">Heading 1</label>
              
              <input type='text' placeholder="Contracting Invoice" name="heading1" class="text_input" data_target="heading1">

              <label for="message1">Message Section 1</label>
              <textarea placeholder="For contract work on the Invoice-Out invoice creation and delivery web-app." name="message1" class="text_input" data_target="message1"></textarea>
            </div>
            
            <div class="subsection">
              <label for="heading2">Heading 2</label>
              <input type='text' placeholder="Thank You" name="heading2" class="text_input" data_target="heading2">

              <label for="message_2">Message Section 2</label>
              <textarea placeholder="We've enjoyed working with you and look forward to collaborating in the future!" name="message2" class="text_input" data_target="message2"></textarea>
            </div>

            <div class="subsection">
              <label for="csv_input">Upload your CSV <span class="required_asterisk">*</span></label>
              <input type='file' name="csv_input" id="csv_input" required>
            </div>
          </fieldset>
        </section>

        <section>
          <h3>Email</h3>

          <fieldset class="hidden">
            <div class="subsection">
              <label for="to_email">To (Separate multiple emails with commas) <span class="required_asterisk">*</span></label>
              <input type='text' placeholder="johndoe@mildwestdesigns.com" name="to_email" id="to_email" required>

              <label for="from_email">From <span class="required_asterisk">*</span></label>
              <input type='email' placeholder="invoices@invoice-out.com" name="from_email" id="from_email" required>

              <input type="checkbox" checked name="copy_me" id="copy_me" value="copy"><span>Email yourself a copy</span>
            </div>

            <div class="subsection">
              <label for="subject">Subject <span class="required_asterisk">*</span></label>
              <input type='text' placeholder="Invoice Out" name="subject" id="subject" required>
            </div>
          </fieldset> 
        </section>

        <section>
          <!--<div class="g-recaptcha" data-sitekey="6LdINhYTAAAAALuvkN9vU8wJHP8ae1HcR0BLqiWc"></div>-->

          <input type="submit" value="Send Invoice">
        </section>
      </form>
    </div>