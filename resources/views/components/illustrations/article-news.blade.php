<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="transparent"/>
    
    <!-- Newspaper/Magazine -->
    <g transform="translate(200, 150)">
        <!-- Paper Stack -->
        <rect x="-88" y="-98" width="176" height="196" rx="6" fill="#4B5563" opacity="0.2"/>
        <rect x="-92" y="-102" width="184" height="204" rx="8" fill="#1F2937" stroke="#667eea" stroke-width="3"/>
        
        <!-- Paper Content -->
        <rect x="-82" y="-92" width="164" height="184" rx="4" fill="#E5E7EB"/>
        
        <!-- Newspaper Header -->
        <g opacity="0.9">
            <!-- Masthead -->
            <rect x="-75" y="-82" width="150" height="18" rx="2" fill="#667eea" opacity="0.7"/>
            <rect x="-70" y="-77" width="60" height="8" rx="1" fill="#E5E7EB" opacity="0.9"/>
            
            <!-- Date -->
            <rect x="40" y="-77" width="30" height="3" rx="1.5" fill="#E5E7EB" opacity="0.8"/>
            
            <!-- Main Headline -->
            <rect x="-75" y="-58" width="130" height="10" rx="2" fill="#1F2937" opacity="0.8"/>
            <rect x="-75" y="-46" width="100" height="7" rx="2" fill="#764ba2" opacity="0.6"/>
            <rect x="-75" y="-36" width="80" height="5" rx="2" fill="#1F2937" opacity="0.5"/>
            
            <!-- Featured Image -->
            <rect x="-75" y="-25" width="150" height="80" rx="4" fill="#667eea" opacity="0.2" stroke="#667eea" stroke-width="2"/>
            <circle cx="-30" cy="5" r="15" fill="#764ba2" opacity="0.3"/>
            <circle cx="20" cy="15" r="12" fill="#667eea" opacity="0.3"/>
            <path d="M-75,35 L-50,10 L-20,25 L10,5 L75,35 Z" fill="#374151" opacity="0.3"/>
            
            <!-- Image Caption -->
            <rect x="-75" y="40" width="100" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>
            
            <!-- Article Columns -->
            <g fill="#1F2937" opacity="0.4">
                <!-- Left Column -->
                <rect x="-75" y="50" width="68" height="3" rx="1.5"/>
                <rect x="-75" y="56" width="68" height="3" rx="1.5"/>
                <rect x="-75" y="62" width="65" height="3" rx="1.5"/>
                <rect x="-75" y="68" width="68" height="3" rx="1.5"/>
                <rect x="-75" y="74" width="67" height="3" rx="1.5"/>
                <rect x="-75" y="80" width="68" height="3" rx="1.5"/>
                
                <!-- Right Column -->
                <rect x="7" y="50" width="68" height="3" rx="1.5"/>
                <rect x="7" y="56" width="68" height="3" rx="1.5"/>
                <rect x="7" y="62" width="65" height="3" rx="1.5"/>
                <rect x="7" y="68" width="68" height="3" rx="1.5"/>
                <rect x="7" y="74" width="67" height="3" rx="1.5"/>
                <rect x="7" y="80" width="68" height="3" rx="1.5"/>
            </g>
        </g>
        
        <!-- Paper Shadow -->
        <ellipse cx="0" cy="110" rx="95" ry="10" fill="#667eea" opacity="0.15"/>
    </g>
    
    <!-- Microphone (News/Reporting) -->
    <g transform="translate(90, 100)">
        <!-- Mic Body -->
        <rect x="-12" y="-40" width="24" height="60" rx="12" fill="#374151" stroke="#764ba2" stroke-width="2"/>
        <rect x="-10" y="-35" width="20" height="50" rx="10" fill="#4B5563"/>
        
        <!-- Mic Grille -->
        <circle cx="0" cy="-10" r="8" fill="#764ba2" opacity="0.3"/>
        <circle cx="0" cy="0" r="8" fill="#764ba2" opacity="0.3"/>
        <circle cx="0" cy="10" r="8" fill="#764ba2" opacity="0.3"/>
        
        <!-- Mic Lines -->
        <line x1="-8" y1="-25" x2="8" y2="-25" stroke="#E5E7EB" stroke-width="1" opacity="0.5"/>
        <line x1="-8" y1="-15" x2="8" y2="-15" stroke="#E5E7EB" stroke-width="1" opacity="0.5"/>
        <line x1="-8" y1="-5" x2="8" y2="-5" stroke="#E5E7EB" stroke-width="1" opacity="0.5"/>
        <line x1="-8" y1="5" x2="8" y2="5" stroke="#E5E7EB" stroke-width="1" opacity="0.5"/>
        <line x1="-8" y1="15" x2="8" y2="15" stroke="#E5E7EB" stroke-width="1" opacity="0.5"/>
        
        <!-- Mic Handle -->
        <rect x="-8" y="20" width="16" height="25" rx="2" fill="#374151" stroke="#764ba2" stroke-width="2"/>
        <rect x="-6" y="22" width="12" height="3" rx="1" fill="#667eea" opacity="0.4"/>
        
        <!-- Cable -->
        <path d="M0,45 Q5,60 0,75" stroke="#374151" stroke-width="3" fill="none"/>
    </g>
    
    <!-- Notification Bell -->
    <g transform="translate(320, 220)">
        <path d="M-10,-15 L-10,-5 Q-10,5 -15,10 L15,10 Q10,5 10,-5 L10,-15 Q10,-20 5,-22 L5,-25 Q5,-28 0,-28 Q-5,-28 -5,-25 L-5,-22 Q-10,-20 -10,-15 Z" 
              fill="#764ba2" opacity="0.6" stroke="#764ba2" stroke-width="2"/>
        <ellipse cx="0" cy="10" rx="18" ry="3" fill="#764ba2" opacity="0.3"/>
        <circle cx="0" cy="15" r="3" fill="#EF4444"/>
        
        <!-- Notification Lines -->
        <path d="M-20,-10 L-28,-10" stroke="#764ba2" stroke-width="2" opacity="0.4"/>
        <path d="M20,-10 L28,-10" stroke="#764ba2" stroke-width="2" opacity="0.4"/>
        <path d="M-15,-23 L-21,-29" stroke="#764ba2" stroke-width="2" opacity="0.4"/>
        <path d="M15,-23 L21,-29" stroke="#764ba2" stroke-width="2" opacity="0.4"/>
    </g>
    
    <!-- Floating Icons -->
    <circle cx="330" cy="80" r="15" fill="#667eea" opacity="0.15"/>
    <circle cx="80" cy="230" r="18" fill="#764ba2" opacity="0.2"/>
    <rect x="310" y="140" width="18" height="18" rx="3" fill="#667eea" opacity="0.15" transform="rotate(20 319 149)"/>
</svg>
