/**
 * Cookie Consent Manager für HexaHost.de
 * DSGVO-konformes Cookie-Banner mit granularen Einstellungen
 */
(function() {
    'use strict';

    // Cookie-Konfiguration
    const COOKIE_NAME = 'hexahost_cookie_consent';
    const COOKIE_EXPIRY_DAYS = 365;

    // DOM-Elemente
    const banner = document.getElementById('cookieConsent');
    const settingsPanel = document.getElementById('cookieSettingsPanel');
    const acceptAllBtn = document.getElementById('cookieAcceptAll');
    const acceptEssentialBtn = document.getElementById('cookieAcceptEssential');
    const settingsBtn = document.getElementById('cookieSettings');
    const saveSettingsBtn = document.getElementById('cookieSaveSettings');
    const closeSettingsBtn = document.getElementById('cookieCloseSettings');
    const analyticsCheckbox = document.getElementById('cookieAnalytics');
    const marketingCheckbox = document.getElementById('cookieMarketing');

    /**
     * Cookie-Hilfsfunktionen
     */
    const CookieUtils = {
        set: function(name, value, days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = 'expires=' + date.toUTCString();
            document.cookie = name + '=' + JSON.stringify(value) + ';' + expires + ';path=/;SameSite=Lax;Secure';
        },

        get: function(name) {
            const nameEQ = name + '=';
            const cookies = document.cookie.split(';');
            for (let i = 0; i < cookies.length; i++) {
                let cookie = cookies[i].trim();
                if (cookie.indexOf(nameEQ) === 0) {
                    try {
                        return JSON.parse(cookie.substring(nameEQ.length));
                    } catch (e) {
                        return null;
                    }
                }
            }
            return null;
        },

        delete: function(name) {
            document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;';
        }
    };

    /**
     * Cookie Consent Manager
     */
    const CookieConsent = {
        // Standardeinstellungen
        defaultConsent: {
            essential: true,    // Immer aktiviert
            analytics: false,
            marketing: false,
            timestamp: null
        },

        /**
         * Initialisierung
         */
        init: function() {
            if (!banner) return;

            const consent = this.getConsent();
            
            if (consent && consent.timestamp) {
                // Consent bereits gegeben - Banner verstecken
                this.hideBanner();
                this.applyConsent(consent);
            } else {
                // Zeige Banner
                this.showBanner();
            }

            this.bindEvents();
        },

        /**
         * Event-Listener binden
         */
        bindEvents: function() {
            if (acceptAllBtn) {
                acceptAllBtn.addEventListener('click', () => this.acceptAll());
            }

            if (acceptEssentialBtn) {
                acceptEssentialBtn.addEventListener('click', () => this.acceptEssential());
            }

            if (settingsBtn) {
                settingsBtn.addEventListener('click', () => this.showSettings());
            }

            if (saveSettingsBtn) {
                saveSettingsBtn.addEventListener('click', () => this.saveSettings());
            }

            if (closeSettingsBtn) {
                closeSettingsBtn.addEventListener('click', () => this.hideSettings());
            }

            // ESC-Taste zum Schließen der Einstellungen
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && settingsPanel && settingsPanel.style.display !== 'none') {
                    this.hideSettings();
                }
            });
        },

        /**
         * Alle Cookies akzeptieren
         */
        acceptAll: function() {
            const consent = {
                essential: true,
                analytics: true,
                marketing: true,
                timestamp: new Date().toISOString()
            };
            this.saveConsent(consent);
            this.hideBanner();
            this.applyConsent(consent);
            this.showNotification('Alle Cookies wurden akzeptiert.', 'success');
        },

        /**
         * Nur essenzielle Cookies akzeptieren
         */
        acceptEssential: function() {
            const consent = {
                essential: true,
                analytics: false,
                marketing: false,
                timestamp: new Date().toISOString()
            };
            this.saveConsent(consent);
            this.hideBanner();
            this.applyConsent(consent);
            this.showNotification('Nur notwendige Cookies wurden akzeptiert.', 'info');
        },

        /**
         * Einstellungen speichern
         */
        saveSettings: function() {
            const consent = {
                essential: true,
                analytics: analyticsCheckbox ? analyticsCheckbox.checked : false,
                marketing: marketingCheckbox ? marketingCheckbox.checked : false,
                timestamp: new Date().toISOString()
            };
            this.saveConsent(consent);
            this.hideSettings();
            this.hideBanner();
            this.applyConsent(consent);
            this.showNotification('Cookie-Einstellungen wurden gespeichert.', 'success');
        },

        /**
         * Consent im Cookie speichern
         */
        saveConsent: function(consent) {
            CookieUtils.set(COOKIE_NAME, consent, COOKIE_EXPIRY_DAYS);
        },

        /**
         * Consent aus Cookie lesen
         */
        getConsent: function() {
            return CookieUtils.get(COOKIE_NAME);
        },

        /**
         * Consent anwenden (z.B. Analytics laden)
         */
        applyConsent: function(consent) {
            // Dispatch Custom Event für andere Scripts
            window.dispatchEvent(new CustomEvent('cookieConsentUpdated', {
                detail: consent
            }));

            // Analytics aktivieren/deaktivieren
            if (consent.analytics) {
                this.enableAnalytics();
            } else {
                this.disableAnalytics();
            }

            // Marketing aktivieren/deaktivieren
            if (consent.marketing) {
                this.enableMarketing();
            } else {
                this.disableMarketing();
            }
        },

        /**
         * Analytics aktivieren (Placeholder für z.B. Google Analytics)
         */
        enableAnalytics: function() {
            // Hier können Analytics-Scripts geladen werden
            // Beispiel für Google Analytics:
            // if (typeof gtag === 'undefined') {
            //     const script = document.createElement('script');
            //     script.src = 'https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID';
            //     script.async = true;
            //     document.head.appendChild(script);
            // }
            console.log('Analytics enabled');
        },

        /**
         * Analytics deaktivieren
         */
        disableAnalytics: function() {
            // Analytics-Cookies entfernen falls vorhanden
            console.log('Analytics disabled');
        },

        /**
         * Marketing aktivieren (Placeholder für Marketing-Tools)
         */
        enableMarketing: function() {
            console.log('Marketing enabled');
        },

        /**
         * Marketing deaktivieren
         */
        disableMarketing: function() {
            console.log('Marketing disabled');
        },

        /**
         * Banner anzeigen
         */
        showBanner: function() {
            if (banner) {
                banner.classList.remove('hide');
                banner.classList.add('show');
                banner.setAttribute('aria-hidden', 'false');
                // Fokus auf ersten Button setzen für Accessibility
                setTimeout(() => {
                    if (acceptAllBtn) acceptAllBtn.focus();
                }, 100);
            }
        },

        /**
         * Banner verstecken
         */
        hideBanner: function() {
            if (banner) {
                banner.classList.remove('show');
                banner.classList.add('hide');
                banner.setAttribute('aria-hidden', 'true');
            }
        },

        /**
         * Einstellungen-Panel anzeigen
         */
        showSettings: function() {
            if (settingsPanel) {
                // Aktuelle Einstellungen in Checkboxen laden
                const consent = this.getConsent() || this.defaultConsent;
                if (analyticsCheckbox) analyticsCheckbox.checked = consent.analytics;
                if (marketingCheckbox) marketingCheckbox.checked = consent.marketing;
                
                settingsPanel.style.display = 'block';
                settingsPanel.setAttribute('aria-hidden', 'false');
            }
        },

        /**
         * Einstellungen-Panel verstecken
         */
        hideSettings: function() {
            if (settingsPanel) {
                settingsPanel.style.display = 'none';
                settingsPanel.setAttribute('aria-hidden', 'true');
            }
        },

        /**
         * Notification anzeigen (nutzt HexaHost-Notification-System falls verfügbar)
         */
        showNotification: function(message, type) {
            if (window.HexaHost && typeof window.HexaHost.showNotification === 'function') {
                window.HexaHost.showNotification(message, type);
            }
        },

        /**
         * Consent zurücksetzen (für Datenschutz-Link)
         */
        resetConsent: function() {
            CookieUtils.delete(COOKIE_NAME);
            this.showBanner();
            if (settingsPanel) settingsPanel.style.display = 'none';
        }
    };

    // Initialisierung wenn DOM geladen
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => CookieConsent.init());
    } else {
        CookieConsent.init();
    }

    // Globaler Zugriff für manuelle Steuerung
    window.CookieConsent = CookieConsent;

})();
