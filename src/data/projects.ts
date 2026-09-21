import type { ImageMetadata } from "astro";
import bookbound from "../assets/projects/bookbound.png";
import browserIs from "../assets/projects/browser.is.png";
import buff from "../assets/projects/buff.png";
import capturewell from "../assets/projects/capturewell.png";
import novogamer from "../assets/projects/novogamer.png";
import sitepulse from "../assets/projects/sitepulse.png";

export interface Project {
  name: string;
  domain: string;
  description: string;
  icon: ImageMetadata;
}

export const projects: Project[] = [
  {
    name: "Novogamer",
    domain: "novogamer.com",
    description:
      "A publishing platform for gaming news, reviews, and community writing.",
    icon: novogamer,
  },
  {
    name: "Bookbound",
    domain: "bookbound.app",
    description:
      "Track, tag, and review the books you are reading. A private shelf that stays with you.",
    icon: bookbound,
  },
  {
    name: "Buff",
    domain: "usebuff.app",
    description:
      "A simple calorie and workout log for iOS and Android. Search, scan, or snap to track meals and progress.",
    icon: buff,
  },
  {
    name: "Sitepulse",
    domain: "sitepulse.dev",
    description:
      "Uptime, SSL, DNS, and performance alerts for people who run more than one site.",
    icon: sitepulse,
  },
  {
    name: "Capturewell",
    domain: "capturewell.app",
    description:
      "A screenshot and PDF API with batches, schedules, and no subscription.",
    icon: capturewell,
  },
  {
    name: "Browser.is",
    domain: "browser.is",
    description:
      "Share a snapshot of your browser, device, and location in one link.",
    icon: browserIs,
  },
];
