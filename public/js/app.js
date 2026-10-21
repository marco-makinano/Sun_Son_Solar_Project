/* Sun Son Solar frontend prototype script */
(() => {
  'use strict';
  const DB = {
    users: 'sss_users', bookings: 'sss_bookings', quotes: 'sss_quotes', checkins: 'sss_checkins',
    problems: 'sss_problems', notifications: 'sss_notifications', tickets: 'sss_tickets', chats: 'sss_chats',
    settings: 'sss_settings', history: 'sss_history', session: 'sss_session', preferences: 'sss_preferences'
  };
  const $ = (s, root=document) => root.querySelector(s); const $$ = (s, root=document) => [...root.querySelectorAll(s)];
  const read = (key, fallback=[]) => { try { const v=JSON.parse(localStorage.getItem(key)); return v ?? fallback; } catch { return fallback; } };
  const write = (key, value) => localStorage.setItem(key, JSON.stringify(value));
  const all = key => read(DB[key]);
  const save = (key, rows) => write(DB[key], rows);
  const id = prefix => `${prefix}-${Date.now().toString(36)}-${Math.random().toString(36).slice(2,7)}`;
  const nowISO = () => new Date().toISOString();
  const today = () => new Date().toLocaleDateString('en-CA');
  const dateText = value => value ? new Date(`${value}T12:00:00`).toLocaleDateString('en-PH',{month:'short',day:'numeric',year:'numeric'}) : '—';
  const timeText = value => value ? new Date(value).toLocaleTimeString('en-PH',{hour:'2-digit',minute:'2-digit'}) : '—';
  const esc = value => String(value ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
  const msg = (target, text, kind='success') => { const el=typeof target==='string'?document.getElementById(target):target; if(el) el.innerHTML=`<div class="form-message ${kind}">${esc(text)}</div>`; };
  const current = () => read(DB.session, null);
  const users = () => all('users');
  const bookings = () => all('bookings');
  const add = (key, item) => { const rows=all(key); rows.unshift(item); save(key,rows); return item; };
  const update = (key, recordId, patch) => save(key, all(key).map(r=>r.id===recordId?{...r,...patch}:r));
  const nameOf = u => [u?.firstName,u?.middleName,u?.lastName].filter(Boolean).join(' ') || u?.name || 'Unknown';
  const serviceNames = ['Consultation','Designing','Permitting','Installation','Maintenance','Repair','Monitoring'];

  function seed() {
    if (!localStorage.getItem(DB.users)) {
      save('users', [
        {id:'USR-001',firstName:'Demo',lastName:'Administrator',middleName:'',birthdate:'1990-01-01',gender:'Prefer not to say',email:'admin@sunsonsolar.demo',phone:'09000000001',address:'Pasig City',username:'admin',password:'admin123',role:'admin',department:'IT',status:'Active'},
        {id:'USR-002',firstName:'Apollo',lastName:'Santos',middleName:'',birthdate:'1990-01-01',gender:'Prefer not to say',email:'technician@sunsonsolar.demo',phone:'09000000002',address:'Pasig City',username:'apollo',password:'DemoTech2026!',role:'technician',department:'Dispatch',status:'Active'},
        {id:'USR-003',firstName:'Demo',lastName:'Customer',middleName:'',birthdate:'1995-01-01',gender:'Prefer not to say',email:'customer@sunsonsolar.demo',phone:'09000000003',address:'Pasig City',username:'customer',password:'DemoCustomer2026!',role:'customer',department:'',status:'Active'}
      ]);
    }
    if (!localStorage.getItem(DB.bookings)) save('bookings', [
      {id:'BK-1001',customerId:'USR-003',customerName:'Demo Customer',service:'Consultation',date:today(),time:'10:00 AM',address:'Pasig City',notes:'Initial consultation',status:'Pending',technicianId:'',technicianName:'',createdAt:nowISO(),amount:1500},
      {id:'BK-1002',customerId:'USR-003',customerName:'Demo Customer',service:'Maintenance',date:new Date(Date.now()+86400000*3).toLocaleDateString('en-CA'),time:'1:00 PM',address:'Pasig City',notes:'Routine maintenance',status:'Approved',technicianId:'USR-002',technicianName:'Apollo Santos',createdAt:nowISO(),amount:3500}
    ]);
    if (!localStorage.getItem(DB.quotes)) save('quotes', []);
    if (!localStorage.getItem(DB.checkins)) save('checkins', []);
    if (!localStorage.getItem(DB.problems)) save('problems', []);
    if (!localStorage.getItem(DB.notifications)) save('notifications', [{id:id('NTF'),audience:'all',title:'Welcome to Sun Son Solar',message:'Thank you for trying the demo system.',type:'System update',createdAt:nowISO(),readBy:[]}]);
    if (!localStorage.getItem(DB.tickets)) save('tickets', []);
    if (!localStorage.getItem(DB.chats)) save('chats', []);
    if (!localStorage.getItem(DB.settings)) write(DB.settings,{services:serviceNames.map((name,i)=>({name,price:0,active:true})),openTime:'08:00',closeTime:'17:00',maxPerDay:20});
    if (!localStorage.getItem(DB.history)) save('history', []);
  }
  seed();

  function tableRows(idName, rows, emptyCols, emptyText='No records yet.') {
    const el = document.getElementById(idName);
    if (!el) return;
    el.innerHTML = rows.length ? rows.join('') : `<tr><td colspan="${emptyCols}" class="empty-state">${esc(emptyText)}</td></tr>`;
  }
  const badge = status => `<span class="badge ${esc(status?.toLowerCase())}">${esc(status||'—')}</span>`;

  function init() {
    const checkinBtn = $('#checkinBtn');
    if (checkinBtn) {
      checkinBtn.addEventListener('click', () => {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(p => {
            msg('checkinResult', `Check-in recorded! Coordinates: ${p.coords.latitude.toFixed(5)}, ${p.coords.longitude.toFixed(5)}`);
          }, () => {
            msg('checkinResult', 'Check-in recorded without GPS coordinates.', 'error');
          });
        }
      });
    }
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();