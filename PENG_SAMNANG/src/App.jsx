import { useState } from "react";
import profileImage from "./assets/profile.jpg";

const navItems = [
  { label: "About", href: "#about" },
  { label: "Experience", href: "#experience" },
  { label: "Skills", href: "#skills" },
  { label: "Education", href: "#education" },
  { label: "Languages", href: "#languages" },
  { label: "Projects", href: "#projects" },
  { label: "Contact", href: "#contact" },
];

const heroBadges = ["React", "Django", "PostgreSQL", "Tailwind CSS"];

const heroStats = [
  { label: "Experience", value: "2+ Years" },
  { label: "Projects", value: "4 Featured" },
  { label: "Location", value: "Phnom Penh" },
  { label: "Work Mode", value: "Remote / Local" },
];

const profileNotes = [
  "Available for freelance web projects",
  "Builds responsive UI and backend APIs",
  "Focused on scalable business solutions",
];

const experienceItems = [
  {
    year: "2025",
    range: "2025 - Present",
    title: "Web Developer (Freelance)",
    description:
      "Build and customize web applications based on client business requirements, from responsive UI to backend APIs and deployment-ready solutions.",
    accent: "cyan",
    stack: ["React", "Vite", "Tailwind CSS", "Django", "PostgreSQL", "Remote / Local Clients"],
  },
  {
    year: "2024",
    range: "2024 - 2025",
    title: "Junior Python Backend Developer at KILO IT",
    description:
      "Developed REST APIs with Django REST Framework and contributed to database design and backend business logic implementation.",
    accent: "green",
    stack: ["Python", "Django", "Django REST Framework", "REST APIs", "Backend Services"],
  },
];

const educationItems = [
  {
    title: "Bachelor of Computer Science",
    detail: "Cambodia University of Management and Technology",
    accent: "cyan",
  },
  {
    title: "High School Graduate",
    detail: "Thmor Kre High School",
    accent: "green",
  },
];

const languageItems = [
  {
    name: "Khmer",
    level: "Native",
    width: "100%",
    accent: "cyan",
  },
  {
    name: "English",
    level: "Working Proficiency",
    width: "78%",
    accent: "green",
  },
];

const skillGroups = [
  {
    title: "Frontend",
    accent: "cyan",
    items: [
      { name: "HTML5", level: 95 },
      { name: "CSS3", level: 92 },
      { name: "JavaScript", level: 90 },
      { name: "TypeScript", level: 82 },
      { name: "React.js", level: 88 },
      { name: "Tailwind CSS", level: 90 },
      { name: "Vite", level: 86 },
    ],
  },
  {
    title: "Backend",
    accent: "green",
    items: [
      { name: "Python", level: 92 },
      { name: "Django", level: 92 },
      { name: "Django REST Framework", level: 90 },
      { name: "REST APIs", level: 90 },
      { name: "JWT Authentication", level: 84 },
    ],
  },
  {
    title: "Database",
    accent: "purple",
    items: [
      { name: "PostgreSQL", level: 88 },
      { name: "MySQL", level: 84 },
    ],
  },
  {
    title: "Tools",
    accent: "orange",
    items: [
      { name: "Git", level: 90 },
      { name: "GitHub", level: 92 },
      { name: "Figma", level: 80 },
      { name: "Render", level: 82 },
      { name: "Vercel", level: 84 },
    ],
  },
];

const allSkills = skillGroups.flatMap((group) => group.items.map((skill) => ({ ...skill, accent: group.accent })));

const projects = [
  {
    title: "Logistic Delivery System",
    type: "Full-Stack Logistics Management System",
    description:
      "A full-stack logistics web application for shipping orders, invoices, payments, reports, QR-based workflows, and public order lookup.",
    accent: "green",
    tech: [
      "Tailwind CSS",
      "React",
      "TypeScript",
      "Vite",
      "Django REST Framework",
      "Simple JWT",
      "PostgreSQL",
      "Render",
      "Vercel",
    ],
    highlights: [
      "Shipping orders, invoices, and payments",
      "QR workflows and public order lookup",
      "Role-based access for admins and customers",
    ],
    status: "Delivered",
    href: "https://front-end-logistic.vercel.app/",
    cta: "View Project",
  },
  {
    title: "Rithya Swimming School Website",
    type: "Full-Stack Content Management Website",
    description:
      "A public-facing website and admin dashboard for managing hero banners, about content, programs, gallery images, testimonials, and contact information.",
    accent: "cyan",
    tech: [
      "React",
      "Vite",
      "Tailwind CSS",
      "Django",
      "Django REST Framework",
      "PostgreSQL",
      "Render",
      "Cloudinary",
    ],
    highlights: [
      "Public-facing website and admin dashboard",
      "Manage banners, programs, gallery, and testimonials",
      "Cloudinary media storage integration",
    ],
    status: "Delivered",
    href: "https://www.sorithya.com/",
    cta: "Visit Website",
  },
  {
    title: "University Management System (UMS)",
    type: "Full-Stack University Management System",
    description:
      "A university platform for academic and administrative operations including enrollment, attendance, grades, scheduling, lecturer applications, and role-permission management.",
    accent: "orange",
    tech: [
      "React",
      "TypeScript",
      "Vite",
      "Tailwind CSS",
      "shadcn/ui",
      "Django REST Framework",
      "Token Authentication",
      "PostgreSQL",
      "Render",
      "Vercel",
    ],
    highlights: [
      "Enrollment, attendance, and grading workflows",
      "Timetable scheduling and semester lifecycle",
      "Custom role-permission management",
    ],
    status: "Ongoing",
    href: "https://front-end-ums.vercel.app/",
    cta: "View Project",
  },
  {
    title: "AI Face Recognition Attendance System",
    type: "AI-Powered Attendance Management Platform",
    description:
      "An employee attendance platform for factory environments with live camera recognition, automatic check-in/check-out, overtime and leave workflows, reporting, and Telegram alerts.",
    accent: "purple",
    tech: [
      "Django REST Framework",
      "WebSockets",
      "InsightFace",
      "FAISS",
      "OpenCV",
      "RTSP/IP Cameras",
      "Excel/PDF Export",
      "Telegram Alerts",
    ],
    highlights: [
      "Live attendance feed with camera recognition",
      "Shift logic, overtime, and leave management",
      "Telegram alerts for unknown faces and late attendance",
    ],
    status: "Featured",
    href: "https://frontend-ai-face.vercel.app/",
    cta: "View Project",
  },
];

const contactCards = [
  {
    title: "Email",
    icon: "email",
    subtitle: "samnang200319@gmail.com",
    meta: "Professional contact",
    href: "mailto:samnang200319@gmail.com",
    cta: "Send Email",
    accent: "blue",
  },
  // {
  //   title: "Website",
  //   icon: "website",
  //   subtitle: "www.pengsamnang.com",
  //   meta: "Portfolio website",
  //   href: "https://www.pengsamnang.com",
  //   cta: "Open Website",
  //   accent: "green",
  // },
  {
    title: "GitHub",
    icon: "github",
    subtitle: "github.com/pengsamnang",
    meta: "Code and repositories",
    href: "https://github.com/pengsamnang",
    cta: "View GitHub",
    accent: "purple",
  },
  {
    title: "LinkedIn",
    icon: "linkedin",
    subtitle: "linkedin.com/in/pengsamnang",
    meta: "Professional profile",
    href: "https://www.linkedin.com/in/peng-samnang-740363317/",
    cta: "Visit LinkedIn",
    accent: "indigo",
  },
  {
    title: "Telegram",
    icon: "telegram",
    subtitle: "@pengsamnang",
    meta: "+885 96 34 88 464",
    href: "https://t.me/pengsamnang",
    cta: "Send Message",
    accent: "cyan",
  },
];

const stars = Array.from({ length: 90 }, (_, index) => ({
  id: `star-${index}`,
  size: ((index * 7) % 3) + 1,
  top: `${(index * 13) % 100}%`,
  left: `${(index * 17) % 100}%`,
  duration: `${2 + ((index * 11) % 4)}s`,
  delay: `${(index % 10) * 0.2}s`,
  opacity: 0.45 + (index % 5) * 0.1,
}));

const meteors = Array.from({ length: 4 }, (_, index) => ({
  id: `meteor-${index}`,
  top: `${8 + index * 12}%`,
  left: `${index * 20}%`,
  duration: `${5 + index}s`,
  delay: `${index * 3}s`,
}));

const waveText = "Full-Stack Web Developer";

function ContactIcon({ type }) {
  const icons = {
    email: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M4 6h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2Zm0 2 8 5 8-5"
          fill="none"
          stroke="currentColor"
          strokeWidth="1.8"
          strokeLinecap="round"
          strokeLinejoin="round"
        />
      </svg>
    ),
    website: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M12 3a9 9 0 1 0 0 18m0-18c2.2 2.3 3.5 5.6 3.5 9S14.2 18.7 12 21m0-18C9.8 5.3 8.5 8.6 8.5 12s1.3 6.7 3.5 9M4 12h16"
          fill="none"
          stroke="currentColor"
          strokeWidth="1.8"
          strokeLinecap="round"
          strokeLinejoin="round"
        />
      </svg>
    ),
    github: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M12 2a10 10 0 0 0-3.2 19.5c.5.1.7-.2.7-.5v-2c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 .1 1.5 1 1.5 1 .9 1.5 2.4 1.1 3 .8.1-.7.4-1.1.7-1.4-2.2-.2-4.5-1.1-4.5-4.8 0-1.1.4-2 1-2.7-.1-.2-.4-1.3.1-2.7 0 0 .9-.3 2.8 1a9.7 9.7 0 0 1 5.1 0c1.9-1.3 2.8-1 2.8-1 .5 1.4.2 2.5.1 2.7.6.7 1 1.6 1 2.7 0 3.8-2.3 4.6-4.5 4.8.4.3.7 1 .7 2v3c0 .3.2.6.7.5A10 10 0 0 0 12 2Z"
          fill="currentColor"
        />
      </svg>
    ),
    linkedin: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M6.8 8.4A1.8 1.8 0 1 1 6.8 4.8a1.8 1.8 0 0 1 0 3.6ZM5.2 9.8h3.1V19H5.2Zm5 0h3v1.3h.1c.4-.8 1.5-1.6 3-1.6 3.2 0 3.8 2.1 3.8 4.8V19H17v-4.2c0-1 0-2.3-1.4-2.3S14 13.6 14 14.7V19h-3.1Z"
          fill="currentColor"
        />
      </svg>
    ),
    telegram: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="m20.8 4.6-2.5 11.8c-.2.8-.7 1-1.4.6l-3.8-2.8-1.8 1.7c-.2.2-.4.4-.8.4l.3-4 7.3-6.6c.3-.3-.1-.5-.5-.2l-9 5.7-3.9-1.2c-.8-.3-.8-.8.2-1.2l15.2-5.9c.7-.3 1.3.2 1 1.7Z"
          fill="currentColor"
        />
      </svg>
    ),
  };

  return icons[type] ?? null;
}

function SkillIcon({ type }) {
  const icons = {
    HTML5: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="m4 3 1.7 18L12 23l6.3-2L20 3Z" fill="currentColor" opacity="0.18" />
        <path
          d="m7.4 7 .3 2.4h7.2l-.2 2.5H8l.3 2.3h6.1l-.4 4-2 .6-2-.6-.1-1.6H7.7l.2 3.3 4.1 1.2 4.1-1.2.9-10.8Z"
          fill="currentColor"
        />
      </svg>
    ),
    CSS3: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="m4 3 1.7 18L12 23l6.3-2L20 3Z" fill="currentColor" opacity="0.18" />
        <path
          d="m7.3 7 .2 2.4h7.5l-.2 2.5H9.2l.2 2.2h5.1l-.4 4-2 .6-2-.6-.1-1.5H7.9l.2 3.2 3.9 1.2 4-1.2.9-10.8Z"
          fill="currentColor"
        />
      </svg>
    ),
    JavaScript: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <rect x="3" y="3" width="18" height="18" rx="4" fill="currentColor" opacity="0.18" />
        <path
          d="M10.6 15.6c0 1.8-1 2.8-2.6 2.8-1.5 0-2.3-.8-2.8-1.7l1.4-.9c.3.6.6 1 1.3 1 .6 0 1-.3 1-1.2V9.3h1.7Zm3-1.1c.4.7 1 1.2 2 1.2.8 0 1.3-.4 1.3-1 0-.7-.5-.9-1.5-1.3l-.5-.2c-1.4-.6-2.3-1.3-2.3-2.8 0-1.4 1.1-2.5 2.8-2.5 1.2 0 2.1.4 2.7 1.5l-1.4.9c-.3-.6-.7-.8-1.3-.8s-1 .3-1 .8c0 .6.4.8 1.3 1.2l.5.2c1.6.7 2.5 1.4 2.5 3 0 1.7-1.4 2.6-3.2 2.6-1.8 0-3-.9-3.6-2.1Z"
          fill="currentColor"
        />
      </svg>
    ),
    TypeScript: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <rect x="3" y="3" width="18" height="18" rx="4" fill="currentColor" opacity="0.18" />
        <path
          d="M7.1 9.1h6.4v1.6h-2.3v7H9v-7H7.1Zm8 2.2c0-1 .9-1.7 2.2-1.7 1 0 1.8.3 2.5.8l-.8 1.3c-.5-.4-1-.6-1.6-.6-.5 0-.8.2-.8.5 0 .4.6.6 1.2.8 1 .3 2.2.8 2.2 2.2 0 1.5-1.2 2.2-2.7 2.2-1.2 0-2.2-.4-3-1l.8-1.3c.6.5 1.3.8 2 .8.6 0 1-.2 1-.6 0-.4-.5-.6-1.2-.8-1-.3-1.8-.9-1.8-2.1Z"
          fill="currentColor"
        />
      </svg>
    ),
    "React.js": (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <circle cx="12" cy="12" r="1.8" fill="currentColor" />
        <ellipse cx="12" cy="12" rx="8.2" ry="3.2" fill="none" stroke="currentColor" strokeWidth="1.7" />
        <ellipse cx="12" cy="12" rx="8.2" ry="3.2" fill="none" stroke="currentColor" strokeWidth="1.7" transform="rotate(60 12 12)" />
        <ellipse cx="12" cy="12" rx="8.2" ry="3.2" fill="none" stroke="currentColor" strokeWidth="1.7" transform="rotate(120 12 12)" />
      </svg>
    ),
    "Tailwind CSS": (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M7 10.2c1-1.8 2.3-2.7 4-2.7 2.6 0 2.9 1.9 4.2 2.6 1 .5 2.2.4 3.8-.5-1 1.8-2.3 2.7-4 2.7-2.6 0-2.9-1.9-4.2-2.6-1-.5-2.2-.4-3.8.5Zm-2 4.8c1-1.8 2.3-2.7 4-2.7 2.6 0 2.9 1.9 4.2 2.6 1 .5 2.2.4 3.8-.5-1 1.8-2.3 2.7-4 2.7-2.6 0-2.9-1.9-4.2-2.6-1-.5-2.2-.4-3.8.5Z"
          fill="currentColor"
        />
      </svg>
    ),
    Vite: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="m12 3 7.4 1.9-1.5 11.2L12 21l-5.9-4.9L4.6 4.9Z" fill="currentColor" opacity="0.2" />
        <path d="M12 4.6 8 13.7l2.6-.6-.5 4.2 6-9.6-2.7.6 1-3.7Z" fill="currentColor" />
      </svg>
    ),
    Python: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M12.4 3.6c-4 0-3.7 1.7-3.7 1.7v1.8h3.8v.6H7.2S4.7 7.4 4.7 12c0 4.6 2.2 4.4 2.2 4.4h1.3v-1.8s-.1-2.2 3.2-2.2h5.4s3 0 3-2.9V6.6s.4-3-5-3Zm-2.1 1.8a.8.8 0 1 1 0 1.6.8.8 0 0 1 0-1.6Z"
          fill="currentColor"
        />
        <path
          d="M11.6 20.4c4 0 3.7-1.7 3.7-1.7v-1.8h-3.8v-.6h5.3s2.5.3 2.5-4.3c0-4.6-2.2-4.4-2.2-4.4h-1.3v1.8s.1 2.2-3.2 2.2h-5.4s-3 0-3 2.9v2.9s-.4 3 5 3Zm2.1-1.8a.8.8 0 1 1 0-1.6.8.8 0 0 1 0 1.6Z"
          fill="currentColor"
          opacity="0.82"
        />
      </svg>
    ),
    Django: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <rect x="3" y="4" width="18" height="16" rx="4" fill="currentColor" opacity="0.18" />
        <path
          d="M8 8.5h2.3c3 0 4.6 1.5 4.6 4.1 0 2.7-1.6 4.4-4.6 4.4H8Zm2.1 7c1.8 0 2.5-1 2.5-2.9 0-1.8-.7-2.7-2.5-2.7h-.2v5.6Zm6-6.8h2.2v6.4c0 1.9-.4 3.4-2.1 4.3l-1.4-1c.9-.5 1.3-1.2 1.3-2.8Zm0-2.7h2.2v1.8h-2.2Z"
          fill="currentColor"
        />
      </svg>
    ),
    "Django REST Framework": (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <rect x="3" y="4" width="18" height="16" rx="4" fill="currentColor" opacity="0.18" />
        <path
          d="M7.2 8.2h4.1c2.7 0 4 1.3 4 3.6s-1.3 3.7-4 3.7H9.5v2.3H7.2Zm2.3 5.4H11c1.2 0 1.9-.5 1.9-1.8 0-1.1-.7-1.6-1.9-1.6H9.5Zm7.2-5.4h1.9v8.6h-1.9Zm0-2.2h1.9v1.5h-1.9Z"
          fill="currentColor"
        />
      </svg>
    ),
    "REST APIs": (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M8.2 7a3.2 3.2 0 1 1 0 6.4H6.5v2.1H4.7v-2.1H3V11h1.7V9H3V7h1.7V4.9h1.8V7Zm7.6 3.1h5.2v1.8h-5.2Zm-1.3 4.2H21v1.8h-6.5Zm-4.1 0h2.1v1.8h-2.1Zm6.1-8.4H21v1.8h-4.5Zm-6.1 0h4v1.8h-4Z"
          fill="currentColor"
        />
      </svg>
    ),
    "JWT Authentication": (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M12 3.5 5.5 6v5c0 4.2 2.7 7.9 6.5 9.1 3.8-1.2 6.5-4.9 6.5-9.1V6Zm0 4a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5Zm4 8.2a6 6 0 0 0-8 0"
          fill="none"
          stroke="currentColor"
          strokeWidth="1.8"
          strokeLinecap="round"
          strokeLinejoin="round"
        />
      </svg>
    ),
    PostgreSQL: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M12.2 4.1c-3.5 0-6.4 2.8-6.4 6.4 0 2.8 1.4 4.7 3.5 6.2v2.6c0 .4.2.7.6.8.4.1.8 0 1-.4l1-1.5c4.3.1 6.3-2.8 6.3-6.9 0-4.2-2.3-7.2-6-7.2Zm-2.7 6.1a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm4 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm-1.4 4.6c-1.1 0-2-.4-2.8-1.2"
          fill="none"
          stroke="currentColor"
          strokeWidth="1.8"
          strokeLinecap="round"
          strokeLinejoin="round"
        />
      </svg>
    ),
    MySQL: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M7.6 15.8c0-4.3 2-7.4 4.9-9.2 1.2-.7 2.4-.9 3.2-.8-.5.7-.9 1.4-.9 2.1 2 1.1 3.3 3.2 3.3 5.8 0 3.5-2.5 6.3-5.9 6.3-2.8 0-4.6-1.4-4.6-4.2Z"
          fill="none"
          stroke="currentColor"
          strokeWidth="1.8"
          strokeLinecap="round"
          strokeLinejoin="round"
        />
        <path
          d="M6.4 10.1c-.9-.8-1.9-1.1-2.9-.8.7.7 1.1 1.6 1.1 2.7"
          fill="none"
          stroke="currentColor"
          strokeWidth="1.8"
          strokeLinecap="round"
          strokeLinejoin="round"
        />
      </svg>
    ),
    Git: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M12 3.6 4.6 11 12 18.4 19.4 11ZM9.6 9.6a1.3 1.3 0 1 1 1.7 1.2v2.1a1.3 1.3 0 1 1-1 0v-2.1a1.3 1.3 0 0 1-.7-1.2Zm4.8 5.2a1.3 1.3 0 1 1-1.8-1.2V9.5a1.3 1.3 0 1 1 1 0v4.1a1.3 1.3 0 0 1 .8 1.2Z"
          fill="currentColor"
        />
      </svg>
    ),
    GitHub: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M12 2a10 10 0 0 0-3.2 19.5c.5.1.7-.2.7-.5v-2c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 .1 1.5 1 1.5 1 .9 1.5 2.4 1.1 3 .8.1-.7.4-1.1.7-1.4-2.2-.2-4.5-1.1-4.5-4.8 0-1.1.4-2 1-2.7-.1-.2-.4-1.3.1-2.7 0 0 .9-.3 2.8 1a9.7 9.7 0 0 1 5.1 0c1.9-1.3 2.8-1 2.8-1 .5 1.4.2 2.5.1 2.7.6.7 1 1.6 1 2.7 0 3.8-2.3 4.6-4.5 4.8.4.3.7 1 .7 2v3c0 .3.2.6.7.5A10 10 0 0 0 12 2Z"
          fill="currentColor"
        />
      </svg>
    ),
    Figma: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M12 3.5h-2.2a3.3 3.3 0 1 0 0 6.5H12Zm0 6.5H9.8a3.3 3.3 0 1 0 0 6.5H12Zm0 6.5H9.8a3.3 3.3 0 1 0 3.3 3.3V16.5Zm0-6.5h2.2a3.3 3.3 0 1 0 0-6.5H12Zm0 0h2.2a3.3 3.3 0 1 1 0 6.5H12Z"
          fill="currentColor"
        />
      </svg>
    ),
    Render: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path
          d="M7 5h5.2a4.4 4.4 0 1 1 0 8.8H9.4L17 19h-3.1L7 12.1Zm2.4 2.4v4h2.4a2 2 0 1 0 0-4Z"
          fill="currentColor"
        />
      </svg>
    ),
    Vercel: (
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="M12 5 20 19H4Z" fill="currentColor" />
      </svg>
    ),
  };

  return icons[type] ?? null;
}

function getSkillColor(skillName) {
  const colors = {
    HTML5: "#e34f26",
    CSS3: "#1572b6",
    JavaScript: "#f7df1e",
    TypeScript: "#3178c6",
    "React.js": "#61dafb",
    "Tailwind CSS": "#38bdf8",
    Vite: "#8b5cf6",
    Python: "#3776ab",
    Django: "#44b78b",
    "Django REST Framework": "#ff4b55",
    "REST APIs": "#22c55e",
    "JWT Authentication": "#f59e0b",
    PostgreSQL: "#336791",
    MySQL: "#00758f",
    Git: "#f05032",
    GitHub: "#f8fafc",
    Figma: "#a259ff",
    Render: "#46e3b7",
    Vercel: "#f8fafc",
  };

  return colors[skillName] ?? "#67e8f9";
}

function App() {
  const [menuOpen, setMenuOpen] = useState(false);
  const [featuredProject, ...otherProjects] = projects;

  return (
    <div className="portfolio-app">
      <div className="starfield" aria-hidden="true">
        {stars.map((star) => (
          <span
            key={star.id}
            className="star"
            style={{
              width: `${star.size}px`,
              height: `${star.size}px`,
              top: star.top,
              left: star.left,
              animationDuration: star.duration,
              animationDelay: star.delay,
              opacity: star.opacity,
            }}
          />
        ))}
        {meteors.map((meteor) => (
          <span
            key={meteor.id}
            className="meteor"
            style={{
              top: meteor.top,
              left: meteor.left,
              animationDuration: meteor.duration,
              animationDelay: meteor.delay,
            }}
          />
        ))}
      </div>

      <header className="">
        <nav className="site-nav">
          <a className="brand" href="#about">
            Portfolio
          </a>
          <button
            type="button"
            className="menu-toggle"
            aria-expanded={menuOpen}
            aria-controls="primary-navigation"
            aria-label={menuOpen ? "Close menu" : "Open menu"}
            onClick={() => setMenuOpen((open) => !open)}
          >
            <span />
            <span />
            <span />
          </button>
          <div
            id="primary-navigation"
            className={`nav-links ${menuOpen ? "nav-links-open" : ""}`}
          >
            {navItems.map((item) => (
              <a
                key={item.href}
                href={item.href}
                onClick={() => setMenuOpen(false)}
              >
                {item.label}
              </a>
            ))}
          </div>
          {/* <a className="nav-cta" href="https://www.pengsamnang.com" target="_blank" rel="noreferrer">
            Visit Site
          </a> */}
        </nav>
      </header>

      <main>
        <section id="about" className="section hero-section">
          <div className="section-glow glow-left" />
          <div className="section-glow glow-right" />
          <div className="container hero-grid">
            <div className="hero-copy fade-up">
              <p className="eyebrow">I&apos;m</p>
              <h1>
                <span className="typing-name">Peng Samnang</span>
              </h1>
              <p className="hero-role" aria-label={waveText}>
                {waveText.split("").map((character, index) => (
                  <span
                    key={`${character}-${index}`}
                    className="wave-letter"
                    style={{ animationDelay: `${index * 0.05}s` }}
                  >
                    {character === " " ? "\u00A0" : character}
                  </span>
                ))}
              </p>
              <p className="hero-summary">
                Full-Stack Web Developer with hands-on experience building web
                applications using React, Django, and PostgreSQL. Skilled in
                REST API development, responsive frontend implementation,
                database design, and full-stack system integration.
              </p>

              <div className="hero-badges">
                {heroBadges.map((badge) => (
                  <span key={badge} className="glass-pill">
                    {badge}
                  </span>
                ))}
              </div>

              <div className="hero-actions">
                <a className="button-primary" href="#projects">
                  View Projects
                </a>
                <a
                  className="button-secondary"
                  href="/Samnang_Peng_Full_Stack_Developer.pdf"
                  download="Samnang_Peng_Full_Stack_Developer.pdf"
                >
                  Download CV
                </a>
                <a className="button-secondary" href="#contact">
                  Contact Me
                </a>
              </div>

              <div className="hero-stats">
                {heroStats.map((stat) => (
                  <div key={stat.label} className="stat-card glass-card">
                    <strong>{stat.value}</strong>
                    <span>{stat.label}</span>
                  </div>
                ))}
              </div>
            </div>

            <div className="hero-visual fade-up delay-2">
              <div className="profile-orbit">
                <div className="profile-ring outer-ring" />
                <div className="profile-ring inner-ring" />
                <span className="profile-particle particle-a" />
                <span className="profile-particle particle-b" />
                <span className="profile-particle particle-c" />
                <div className="profile-image-wrap">
                  <img src={profileImage} alt="Peng Samnang" />
                </div>
              </div>
              <div className="hero-side-panel glass-card">
                <span className="mini-tag accent-cyan">Profile Snapshot</span>
                <h3>Modern Full-Stack Workflow</h3>
                <div className="note-list">
                  {profileNotes.map((note) => (
                    <p key={note}>{note}</p>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="experience" className="section ">
          <div className="container">
            <div className="section-heading fade-up">
              <span className="section-tag">Experience</span>
              <h2>Career Timeline</h2>
            </div>

            <div className="timeline">
              {experienceItems.map((item, index) => (
                <article
                  key={item.year}
                  className={`timeline-item fade-up ${index % 2 ? "reverse" : ""}`}
                >
                  <div className={`timeline-year accent-${item.accent}`}>
                    {item.year}
                  </div>
                  <div className="timeline-card glass-card">
                    <span className={`mini-tag accent-${item.accent}`}>
                      {item.range}
                    </span>
                    <h3>{item.title}</h3>
                    <p>{item.description}</p>
                    <div className="chip-row">
                      {item.stack.map((tech) => (
                        <span key={tech} className={`tech-chip accent-${item.accent}`}>
                          {tech}
                        </span>
                      ))}
                    </div>
                  </div>
                </article>
              ))}
            </div>
          </div>
        </section>

        <section id="skills" className="section">
          <div className="container">
            <div className="section-heading fade-up">
              <span className="section-tag">Skills</span>
              <h2>Technical Skills</h2>
            </div>

            <div className="skills-marquee-shell fade-up">
              <div className="skills-marquee-track">
                {allSkills.map((skill, skillIndex) => (
                  <article
                    key={skill.name}
                    className="skill-inline-card"
                    style={{
                      "--orbit-delay": `${skillIndex * 0.22}s`,
                      "--skill-color": getSkillColor(skill.name),
                    }}
                  >
                    <div className="skill-inline-orbit">
                      <span className="skill-orbit-ring" />
                      <span className="skill-orbit-ring skill-orbit-ring-secondary" />
                      <span className="skill-orbit-dot orbit-dot-a" />
                      <span className="skill-orbit-dot orbit-dot-b" />
                      <div className="skill-icon-core">
                        <SkillIcon type={skill.name} />
                      </div>
                    </div>
                    <strong>{skill.name}</strong>
                  </article>
                ))}
                {allSkills.map((skill, skillIndex) => (
                  <article
                    key={`${skill.name}-clone`}
                    className="skill-inline-card skill-inline-card-clone"
                    aria-hidden="true"
                    style={{
                      "--orbit-delay": `${skillIndex * 0.22}s`,
                      "--skill-color": getSkillColor(skill.name),
                    }}
                  >
                    <div className="skill-inline-orbit">
                      <span className="skill-orbit-ring" />
                      <span className="skill-orbit-ring skill-orbit-ring-secondary" />
                      <span className="skill-orbit-dot orbit-dot-a" />
                      <span className="skill-orbit-dot orbit-dot-b" />
                      <div className="skill-icon-core">
                        <SkillIcon type={skill.name} />
                      </div>
                    </div>
                    <strong>{skill.name}</strong>
                  </article>
                ))}
              </div>
            </div>
          </div>
        </section>

        <section id="education" className="section">
          <div className="container">
            <div className="section-heading fade-up">
              <span className="section-tag">Education</span>
              <h2>Academic Background</h2>
            </div>

            <div className="credentials-grid">
              <article className="glass-card fade-up delay-2">
                <span className="section-tag section-tag-small">Education</span>
                <div className="credential-list">
                  {educationItems.map((item) => (
                    <div key={item.title} className="credential-item">
                      <span className={`credential-dot accent-${item.accent}`} />
                      <div>
                        <h3>{item.title}</h3>
                        <p>{item.detail}</p>
                      </div>
                    </div>
                  ))}
                </div>
              </article>
            </div>
          </div>
        </section>

        <section id="languages" className="section">
          <div className="container">
            <div className="section-heading fade-up">
              <span className="section-tag">Languages</span>
              <h2>Communication</h2>
            </div>

            <div className="language-grid">
              {languageItems.map((language, index) => (
                <article
                  key={language.name}
                  className={`glass-card language-card fade-up delay-${index + 1}`}
                >
                  <div className="language-row">
                    <h3>{language.name}</h3>
                    <span>{language.level}</span>
                  </div>
                  <div className="skill-track">
                    <span
                      className={`skill-fill accent-${language.accent}`}
                      style={{ width: language.width }}
                    />
                  </div>
                </article>
              ))}
            </div>
          </div>
        </section>

        <section id="projects" className="section">
          <div className="container">
            <div className="section-heading fade-up">
              <span className="section-tag">Projects</span>
              <h2>MY Projects</h2>
            </div>

            <article className="glass-card project-card featured-project fade-up">
              <div className="project-top">
                <div>
                  <h3>{featuredProject.title}</h3>
                  <span className={`mini-tag accent-${featuredProject.accent}`}>
                    {featuredProject.type}
                  </span>
                </div>
                <span className={`status accent-${featuredProject.accent}`}>
                  {featuredProject.status}
                </span>
              </div>
              <p>{featuredProject.description}</p>
              <div className="project-highlights">
                {featuredProject.highlights.map((item) => (
                  <div key={item} className="highlight-item">
                    <span className={`highlight-dot accent-${featuredProject.accent}`} />
                    <span>{item}</span>
                  </div>
                ))}
              </div>
              <div className="chip-row">
                {featuredProject.tech.map((tech) => (
                  <span
                    key={tech}
                    className={`tech-chip accent-${featuredProject.accent}`}
                  >
                    {tech}
                  </span>
                ))}
              </div>
              {featuredProject.href ? (
                <a
                  className="project-link"
                  href={featuredProject.href}
                  target="_blank"
                  rel="noreferrer"
                >
                  {featuredProject.cta ?? "View Project"}
                </a>
              ) : null}
            </article>

            <div className="projects-grid secondary-projects">
              {otherProjects.map((project, index) => (
                <article
                  key={project.title}
                  className={`glass-card project-card fade-up delay-${index + 1}`}
                >
                  <div className="project-top">
                    <div>
                      <h3>{project.title}</h3>
                      <span className={`mini-tag accent-${project.accent}`}>
                        {project.type}
                      </span>
                    </div>
                    <span className={`status accent-${project.accent}`}>
                      {project.status}
                    </span>
                  </div>
                  <p>{project.description}</p>
                  <div className="project-highlights compact-highlights">
                    {project.highlights.map((item) => (
                      <div key={item} className="highlight-item">
                        <span className={`highlight-dot accent-${project.accent}`} />
                        <span>{item}</span>
                      </div>
                    ))}
                  </div>
                  <div className="chip-row">
                    {project.tech.map((tech) => (
                      <span key={tech} className={`tech-chip accent-${project.accent}`}>
                        {tech}
                      </span>
                    ))}
                  </div>
                  {project.href ? (
                    <a
                      className="project-link"
                      href={project.href}
                      target="_blank"
                      rel="noreferrer"
                    >
                      {project.cta ?? "View Project"}
                    </a>
                  ) : null}
                </article>
              ))}
            </div>
          </div>
        </section>

        <section id="contact" className="section contact-section">
          <div className="section-glow glow-left" />
          <div className="section-glow glow-right" />
          <div className="container">
            <div className="section-heading fade-up">
              <span className="section-tag">Contact</span>
              <h2>Let&apos;s Connect</h2>
              <p>
                Based in Niroth, Chbar Ampov, Phnom Penh. Available for remote
                and local client work on modern full-stack web applications.
              </p>
            </div>

            <div className="contact-layout">
              <article className="glass-card contact-intro-card fade-up">
                <span className="section-tag section-tag-small">Availability</span>
                <h3>Ready for freelance and full-stack collaboration</h3>
                <p>
                  I build client-focused websites and web systems with a strong
                  emphasis on clean UI, backend reliability, and deployment.
                </p>
                <div className="contact-points">
                  <div>
                    <strong>Location</strong>
                    <span>Niroth, Chbar Ampov, Phnom Penh</span>
                  </div>
                  <div>
                    <strong>Email</strong>
                    <span>samnang200319@gmail.com</span>
                  </div>
                  <div>
                    <strong>Focus</strong>
                    <span>React, Django, PostgreSQL, REST APIs</span>
                  </div>
                </div>
              </article>

              <div className="contact-grid">
                {contactCards.map((card, index) => (
                  <article
                  key={card.title}
                  className={`glass-card contact-card fade-up delay-${index + 1}`}
                >
                  <div className={`contact-icon accent-${card.accent}`}>
                    <ContactIcon type={card.icon} />
                  </div>
                  <h3>{card.title}</h3>
                    <p>{card.subtitle}</p>
                    <small>{card.meta}</small>
                    <a href={card.href} target="_blank" rel="noreferrer">
                      {card.cta}
                    </a>
                  </article>
                ))}
              </div>
            </div>
          </div>
        </section>
      </main>

      <footer className="site-footer">
        <p>© 2026 SINCERE. All rights reserved.</p>
      </footer>
    </div>
  );
}

export default App;
