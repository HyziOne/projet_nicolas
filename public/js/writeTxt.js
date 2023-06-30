const texts = ['Développeur', 'Auto-entrepreneur', 'Votre solution']; // Les textes à afficher
let index = 0; // Index du texte actuel
let charIndex = 0; // Index du caractère actuel
let isDeleting = false; // Indicateur de suppression

function typeText() {
const text = texts[index];
if (isDeleting) {
    // Suppression du texte lettre par lettre
    document.getElementById('textAnimation').textContent = text.substring(0, charIndex - 1);
    charIndex--;
    if (charIndex === 0) {
    isDeleting = false;
    index = (index + 1) % texts.length; // Passage au texte suivant
    }
} else {
    // Ajout du texte lettre par lettre
    document.getElementById('textAnimation').textContent = text.substring(0, charIndex + 1);
    charIndex++;
    if (charIndex === text.length) {
    isDeleting = true; // Commencer la suppression du texte
    }
}

const typingSpeed = isDeleting ? 100 : 250; // Vitesse de frappe ou de suppression
setTimeout(typeText, typingSpeed);
}

// Lancer l'animation au chargement de la page
window.addEventListener('DOMContentLoaded', typeText);