
function loadStored(key) {
    try {
        const text = localStorage.getItem(key);
        if (text === null) {
            return [];
        }
        return JSON.parse(text);
    } catch (error) {
        return [];
    }
}


function addStored(key, item) {
    try {
        const list = loadStored(key);
        list.unshift(item);
        localStorage.setItem(key, JSON.stringify(list));
    } catch (error) {
        console.log('Could not save (storage is blocked in this browser).');
    }
}

// Turn 5 into "05"
function pad(number) {
    return String(number).padStart(2, '0');
}

// Turn a Date into text like "2026-10-13"
function formatDate(date) {
    return date.getFullYear() + '-' + pad(date.getMonth() + 1) + '-' + pad(date.getDate());
}

function today() {
    return formatDate(new Date());
}

function dateFromToday(days) {
    const date = new Date();
    date.setDate(date.getDate() + days);
    return formatDate(date);
}

// Turn "2026-10-13" into "Oct 13, 2026"
function prettyDate(text) {
    const parts = text.split('-');
    const date = new Date(parts[0], parts[1] - 1, parts[2]);
    return date.toLocaleDateString('en-PH', { month: 'short', day: 'numeric', year: 'numeric' });
}

function escapeHtml(text) {
    return String(text)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;');
}
