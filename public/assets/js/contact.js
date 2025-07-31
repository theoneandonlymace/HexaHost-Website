// Contact page specific JavaScript
(function() {
    'use strict';

    // FAQ Accordion functionality
    function initFAQ() {
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const toggle = item.querySelector('.faq-toggle');
            
            question.addEventListener('click', function() {
                const isOpen = item.classList.contains('open');
                
                // Close all other FAQ items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('open');
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        const otherToggle = otherItem.querySelector('.faq-toggle');
                        otherAnswer.style.maxHeight = null;
                        otherToggle.textContent = '+';
                    }
                });
                
                // Toggle current item
                if (isOpen) {
                    item.classList.remove('open');
                    answer.style.maxHeight = null;
                    toggle.textContent = '+';
                } else {
                    item.classList.add('open');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    toggle.textContent = '−';
                }
            });
        });
    }

    // Contact form handling
    function initContactForm() {
        const form = document.getElementById('contactForm');
        
        if (!form) return;
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(form);
            const data = {};
            for (let [key, value] of formData.entries()) {
                data[key] = value;
            }
            
            // Basic validation
            if (!validateForm(data)) {
                return;
            }
            
            // Show loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Wird gesendet...';
            submitBtn.disabled = true;
            
            // Send form data to PHP backend
            fetch('contact-handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Reset form
                    form.reset();
                    
                    // Show success message
                    showNotification(data.message, 'success');
                    
                    // Scroll to top
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                } else {
                    // Show error message
                    showNotification(data.message, 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('Es gab ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut.', 'error');
            })
            .finally(() => {
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
        });
    }

    // Form validation
    function validateForm(data) {
        const requiredFields = ['firstName', 'lastName', 'email', 'subject', 'message'];
        const errors = [];
        
        // Check required fields
        requiredFields.forEach(field => {
            if (!data[field] || data[field].trim() === '') {
                errors.push(`Das Feld "${getFieldLabel(field)}" ist erforderlich.`);
            }
        });
        
        // Email validation
        if (data.email && !isValidEmail(data.email)) {
            errors.push('Bitte geben Sie eine gültige E-Mail-Adresse ein.');
        }
        
        // Privacy checkbox
        if (!data.privacy) {
            errors.push('Sie müssen der Datenschutzerklärung zustimmen.');
        }
        
        if (errors.length > 0) {
            showNotification(errors.join('\n'), 'error');
            return false;
        }
        
        return true;
    }

    // Helper function to get field labels
    function getFieldLabel(fieldName) {
        const labels = {
            firstName: 'Vorname',
            lastName: 'Nachname',
            email: 'E-Mail-Adresse',
            subject: 'Betreff',
            message: 'Nachricht'
        };
        return labels[fieldName] || fieldName;
    }

    // Email validation
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // Notification system (using the global one from main.js)
    function showNotification(message, type = 'info') {
        if (window.HexaHost && window.HexaHost.showNotification) {
            window.HexaHost.showNotification(message, type);
        } else {
            // Fallback
            alert(message);
        }
    }

    // Live chat placeholder function
    window.openLiveChat = function() {
        showNotification('Live Chat wird geöffnet... (Demo-Funktion)', 'info');
        // Here you would integrate with your actual live chat service
        // For example: Tawk.to, Intercom, Zendesk Chat, etc.
    };

    // Auto-fill form based on URL parameters
    function autofillForm() {
        const urlParams = new URLSearchParams(window.location.search);
        const packageParam = urlParams.get('package');
        const productParam = urlParams.get('product');
        
        if (packageParam || productParam) {
            const subjectSelect = document.getElementById('subject');
            const messageTextarea = document.getElementById('message');
            
            if (packageParam) {
                // Set subject based on package
                const packageNames = {
                    'vpc-starter': 'Virtual Private Container - Starter Paket',
                    'vpc-business': 'Virtual Private Container - Business Paket',
                    'vpc-professional': 'Virtual Private Container - Professional Paket',
                    'vpc-enterprise': 'Virtual Private Container - Enterprise Paket',
                    'vps-basic': 'Virtual Private Server - Basic Paket',
                    'vps-standard': 'Virtual Private Server - Standard Paket',
                    'vps-premium': 'Virtual Private Server - Premium Paket',
                    'vps-enterprise': 'Virtual Private Server - Enterprise Paket',
                    'mail-starter': 'Mail Gateway - Starter Paket',
                    'mail-business': 'Mail Gateway - Business Paket',
                    'mail-professional': 'Mail Gateway - Professional Paket',
                    'mail-enterprise': 'Mail Gateway - Enterprise Paket',
                    'web-starter': 'Webhosting - Starter Paket',
                    'web-business': 'Webhosting - Business Paket',
                    'web-professional': 'Webhosting - Professional Paket',
                    'web-enterprise': 'Webhosting - Enterprise Paket'
                };
                
                if (packageNames[packageParam]) {
                    messageTextarea.value = `Hallo,\n\nich interessiere mich für das ${packageNames[packageParam]}.\n\nBitte senden Sie mir weitere Informationen und ein individuelles Angebot.\n\nVielen Dank!`;
                    
                    // Set appropriate subject
                    if (packageParam.startsWith('vpc-')) {
                        subjectSelect.value = 'vpc-anfrage';
                    } else if (packageParam.startsWith('vps-')) {
                        subjectSelect.value = 'vps-anfrage';
                    } else if (packageParam.startsWith('mail-')) {
                        subjectSelect.value = 'mail-gateway-anfrage';
                    } else if (packageParam.startsWith('web-')) {
                        subjectSelect.value = 'webhosting-anfrage';
                    }
                }
            } else if (productParam) {
                // Set subject based on product
                const productSubjects = {
                    'vpc': 'vpc-anfrage',
                    'vps': 'vps-anfrage',
                    'mail-gateway': 'mail-gateway-anfrage',
                    'webhosting': 'webhosting-anfrage'
                };
                
                if (productSubjects[productParam]) {
                    subjectSelect.value = productSubjects[productParam];
                    messageTextarea.value = `Hallo,\n\nich interessiere mich für Ihre ${productParam.replace('-', ' ')} Lösungen.\n\nBitte kontaktieren Sie mich für eine persönliche Beratung.\n\nVielen Dank!`;
                }
            }
        }
    }

    // Form field enhancements
    function enhanceFormFields() {
        const inputs = document.querySelectorAll('input, select, textarea');
        
        inputs.forEach(input => {
            // Add focus/blur effects
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
            
            // Check if field already has value (for autofilled forms)
            if (input.value) {
                input.parentElement.classList.add('focused');
            }
        });
        
        // Phone number formatting
        const phoneInput = document.getElementById('phone');
        if (phoneInput) {
            phoneInput.addEventListener('input', function() {
                // Simple German phone number formatting
                let value = this.value.replace(/\D/g, '');
                if (value.startsWith('49')) {
                    value = '+' + value;
                } else if (value.startsWith('0')) {
                    value = '+49' + value.substring(1);
                }
                this.value = value;
            });
        }
    }

    // Accessibility improvements
    function improveAccessibility() {
        // Add ARIA labels to form elements
        const requiredFields = document.querySelectorAll('input[required], select[required], textarea[required]');
        requiredFields.forEach(field => {
            field.setAttribute('aria-required', 'true');
        });
        
        // Add keyboard navigation for FAQ
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(question => {
            question.setAttribute('tabindex', '0');
            question.setAttribute('role', 'button');
            question.setAttribute('aria-expanded', 'false');
            
            question.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });
    }

    // Initialize everything when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initFAQ();
        initContactForm();
        autofillForm();
        enhanceFormFields();
        improveAccessibility();
        
        // Show a welcome message for contact page
        setTimeout(() => {
            showNotification('💬 Haben Sie Fragen? Wir helfen gerne!', 'info');
        }, 2000);
    });

})();