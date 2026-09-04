import './bootstrap';
import {
    ArrowRight, BadgeCheck, Building2, CalendarDays, Compass, createIcons, Headphones, Heart, Leaf,
    MapPin, Menu, Moon, Mountain, Navigation, Play, Quote, Search, ShieldCheck, Sparkles, Star, Sun, Users, Waves, X,
} from 'lucide';

const icons = { ArrowRight, BadgeCheck, Building2, CalendarDays, Compass, Headphones, Heart, Leaf, MapPin, Menu, Moon, Mountain, Navigation, Play, Quote, Search, ShieldCheck, Sparkles, Star, Sun, Users, Waves, X };
const renderIcons = () => createIcons({ icons, attrs: { 'stroke-width': 1.8 } });

document.addEventListener('DOMContentLoaded', renderIcons);
document.addEventListener('livewire:navigated', renderIcons);
document.addEventListener('livewire:initialized', () => Livewire.hook('morph.updated', renderIcons));
