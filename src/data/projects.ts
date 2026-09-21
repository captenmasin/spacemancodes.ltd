export interface Project {
  name: string;
  domain: string;
  description: string;
  icon: string;
}

export const projects: Project[] = [
  {
    name: "Novogamer",
    domain: "novogamer.com",
    description:
      "A publishing platform for gaming news, reviews, and community writing.",
    icon: "/projects/novogamer.png",
  },
  {
    name: "Bookbound",
    domain: "bookbound.app",
    description:
      "Track, tag, and review the books you are reading. A private shelf that stays with you.",
    icon: "/projects/bookbound.png",
  },
  {
    name: "Buff",
    domain: "usebuff.app",
    description:
      "A simple calorie and workout log for iOS and Android. Search, scan, or snap to track meals and progress.",
    icon: "/projects/buff.png",
  },
  {
    name: "Sitepulse",
    domain: "sitepulse.dev",
    description:
      "Uptime, SSL, DNS, and performance alerts for people who run more than one site.",
    icon: "/projects/sitepulse.png",
  },
  {
    name: "Capturewell",
    domain: "capturewell.app",
    description:
      "A screenshot and PDF API with batches, schedules, and no subscription.",
    icon: "/projects/capturewell.png",
  },
    {
        name: "Browser.is",
        domain: "browser.is",
        description:
            "Share a snapshot of your browser, device, and location in one link.",
        icon: "/projects/browser.is.png",
    },
];
