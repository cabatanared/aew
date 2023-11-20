-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 02:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aew2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `num_code` int(3) NOT NULL DEFAULT 0,
  `alpha_2_code` varchar(2) DEFAULT NULL,
  `alpha_3_code` varchar(3) DEFAULT NULL,
  `en_short_name` varchar(52) DEFAULT NULL,
  `nationality` varchar(39) DEFAULT NULL,
  `memberstate` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`num_code`, `alpha_2_code`, `alpha_3_code`, `en_short_name`, `nationality`, `memberstate`) VALUES
(1, 'IA', 'IAE', 'IAEA', 'IAEA', 1),
(4, 'AF', 'AFG', 'Afghanistan', 'Afghan', 0),
(8, 'AL', 'ALB', 'Albania', 'Albanian', 0),
(10, 'AQ', 'ATA', 'Antarctica', 'Antarctic', 0),
(12, 'DZ', 'DZA', 'Algeria', 'Algerian', 0),
(16, 'AS', 'ASM', 'American Samoa', 'American Samoan', 0),
(20, 'AD', 'AND', 'Andorra', 'Andorran', 0),
(24, 'AO', 'AGO', 'Angola', 'Angolan', 0),
(28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antiguan or Barbudan', 0),
(31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaijani, Azeri', 0),
(32, 'AR', 'ARG', 'Argentina', 'Argentine', 0),
(36, 'AU', 'AUS', 'Australia', 'Australian', 1),
(40, 'AT', 'AUT', 'Austria', 'Austrian', 0),
(44, 'BS', 'BHS', 'Bahamas', 'Bahamian', 0),
(48, 'BH', 'BHR', 'Bahrain', 'Bahraini', 0),
(50, 'BD', 'BGD', 'Bangladesh', 'Bangladeshi', 1),
(51, 'AM', 'ARM', 'Armenia', 'Armenian', 0),
(52, 'BB', 'BRB', 'Barbados', 'Barbadian', 0),
(56, 'BE', 'BEL', 'Belgium', 'Belgian', 0),
(60, 'BM', 'BMU', 'Bermuda', 'Bermudian, Bermudan', 0),
(64, 'BT', 'BTN', 'Bhutan', 'Bhutanese', 0),
(68, 'BO', 'BOL', 'Bolivia (Plurinational State of)', 'Bolivian', 0),
(70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnian or Herzegovinian', 0),
(72, 'BW', 'BWA', 'Botswana', 'Motswana, Botswanan', 0),
(74, 'BV', 'BVT', 'Bouvet Island', 'Bouvet Island', 0),
(76, 'BR', 'BRA', 'Brazil', 'Brazilian', 0),
(84, 'BZ', 'BLZ', 'Belize', 'Belizean', 0),
(86, 'IO', 'IOT', 'British Indian Ocean Territory', 'BIOT', 0),
(90, 'SB', 'SLB', 'Solomon Islands', 'Solomon Island', 0),
(92, 'VG', 'VGB', 'Virgin Islands (British)', 'British Virgin Island', 0),
(96, 'BN', 'BRN', 'Brunei Darussalam', 'Bruneian', 0),
(100, 'BG', 'BGR', 'Bulgaria', 'Bulgarian', 0),
(104, 'MM', 'MMR', 'Myanmar', 'Burmese', 0),
(108, 'BI', 'BDI', 'Burundi', 'Burundian', 0),
(112, 'BY', 'BLR', 'Belarus', 'Belarusian', 0),
(116, 'KH', 'KHM', 'Cambodia', 'Cambodian', 0),
(120, 'CM', 'CMR', 'Cameroon', 'Cameroonian', 0),
(124, 'CA', 'CAN', 'Canada', 'Canadian', 0),
(132, 'CV', 'CPV', 'Cabo Verde', 'Cabo Verdean', 0),
(136, 'KY', 'CYM', 'Cayman Islands', 'Caymanian', 0),
(140, 'CF', 'CAF', 'Central African Republic', 'Central African', 0),
(144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lankan', 1),
(148, 'TD', 'TCD', 'Chad', 'Chadian', 0),
(152, 'CL', 'CHL', 'Chile', 'Chilean', 0),
(156, 'CN', 'CHN', 'China', 'Chinese', 1),
(158, 'TW', 'TWN', 'Taiwan, Province of China', 'Chinese, Taiwanese', 0),
(162, 'CX', 'CXR', 'Christmas Island', 'Christmas Island', 0),
(166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'Cocos Island', 0),
(170, 'CO', 'COL', 'Colombia', 'Colombian', 0),
(174, 'KM', 'COM', 'Comoros', 'Comoran, Comorian', 0),
(175, 'YT', 'MYT', 'Mayotte', 'Mahoran', 0),
(178, 'CG', 'COG', 'Congo (Republic of the)', 'Congolese', 0),
(180, 'CD', 'COD', 'Congo (Democratic Republic of the)', 'Congolese', 0),
(184, 'CK', 'COK', 'Cook Islands', 'Cook Island', 0),
(188, 'CR', 'CRI', 'Costa Rica', 'Costa Rican', 0),
(191, 'HR', 'HRV', 'Croatia', 'Croatian', 0),
(192, 'CU', 'CUB', 'Cuba', 'Cuban', 0),
(196, 'CY', 'CYP', 'Cyprus', 'Cypriot', 0),
(203, 'CZ', 'CZE', 'Czech Republic', 'Czech', 0),
(204, 'BJ', 'BEN', 'Benin', 'Beninese, Beninois', 0),
(208, 'DK', 'DNK', 'Denmark', 'Danish', 0),
(212, 'DM', 'DMA', 'Dominica', 'Dominican', 0),
(214, 'DO', 'DOM', 'Dominican Republic', 'Dominican', 0),
(218, 'EC', 'ECU', 'Ecuador', 'Ecuadorian', 0),
(222, 'SV', 'SLV', 'El Salvador', 'Salvadoran', 0),
(226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Equatorial Guinean, Equatoguinean', 0),
(231, 'ET', 'ETH', 'Ethiopia', 'Ethiopian', 0),
(232, 'ER', 'ERI', 'Eritrea', 'Eritrean', 0),
(233, 'EE', 'EST', 'Estonia', 'Estonian', 0),
(234, 'FO', 'FRO', 'Faroe Islands', 'Faroese', 0),
(238, 'FK', 'FLK', 'Falkland Islands (Malvinas)', 'Falkland Island', 0),
(239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'South Georgia or South Sandwich Islands', 0),
(242, 'FJ', 'FJI', 'Fiji', 'Fijian', 0),
(246, 'FI', 'FIN', 'Finland', 'Finnish', 0),
(248, 'AX', 'ALA', 'Åland Islands', 'Åland Island', 0),
(250, 'FR', 'FRA', 'France', 'French', 0),
(254, 'GF', 'GUF', 'French Guiana', 'French Guianese', 0),
(258, 'PF', 'PYF', 'French Polynesia', 'French Polynesian', 0),
(260, 'TF', 'ATF', 'French Southern Territories', 'French Southern Territories', 0),
(262, 'DJ', 'DJI', 'Djibouti', 'Djiboutian', 0),
(266, 'GA', 'GAB', 'Gabon', 'Gabonese', 0),
(268, 'GE', 'GEO', 'Georgia', 'Georgian', 0),
(270, 'GM', 'GMB', 'Gambia', 'Gambian', 0),
(275, 'PS', 'PSE', 'Palestine, State of', 'Palestinian', 0),
(276, 'DE', 'DEU', 'Germany', 'German', 0),
(288, 'GH', 'GHA', 'Ghana', 'Ghanaian', 0),
(292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar', 0),
(296, 'KI', 'KIR', 'Kiribati', 'I-Kiribati', 0),
(300, 'GR', 'GRC', 'Greece', 'Greek, Hellenic', 0),
(304, 'GL', 'GRL', 'Greenland', 'Greenlandic', 0),
(308, 'GD', 'GRD', 'Grenada', 'Grenadian', 0),
(312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe', 0),
(316, 'GU', 'GUM', 'Guam', 'Guamanian, Guambat', 0),
(320, 'GT', 'GTM', 'Guatemala', 'Guatemalan', 0),
(324, 'GN', 'GIN', 'Guinea', 'Guinean', 0),
(328, 'GY', 'GUY', 'Guyana', 'Guyanese', 0),
(332, 'HT', 'HTI', 'Haiti', 'Haitian', 0),
(334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'Heard Island or McDonald Islands', 0),
(336, 'VA', 'VAT', 'Vatican City State', 'Vatican', 0),
(340, 'HN', 'HND', 'Honduras', 'Honduran', 0),
(344, 'HK', 'HKG', 'Hong Kong', 'Hong Kong, Hong Kongese', 0),
(348, 'HU', 'HUN', 'Hungary', 'Hungarian, Magyar', 0),
(352, 'IS', 'ISL', 'Iceland', 'Icelandic', 0),
(356, 'IN', 'IND', 'India', 'Indian', 1),
(360, 'ID', 'IDN', 'Indonesia', 'Indonesian', 1),
(364, 'IR', 'IRN', 'Iran', 'Iranian, Persian', 1),
(368, 'IQ', 'IRQ', 'Iraq', 'Iraqi', 1),
(372, 'IE', 'IRL', 'Ireland', 'Irish', 0),
(376, 'IL', 'ISR', 'Israel', 'Israeli', 0),
(380, 'IT', 'ITA', 'Italy', 'Italian', 0),
(384, 'CI', 'CIV', 'Côte d\'Ivoire', 'Ivorian', 0),
(388, 'JM', 'JAM', 'Jamaica', 'Jamaican', 0),
(392, 'JP', 'JPN', 'Japan', 'Japanese', 1),
(398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstani, Kazakh', 0),
(400, 'JO', 'JOR', 'Jordan', 'Jordanian', 1),
(404, 'KE', 'KEN', 'Kenya', 'Kenyan', 0),
(408, 'KP', 'PRK', 'Korea (Democratic People\'s Republic of)', 'North Korean', 0),
(410, 'KR', 'KOR', 'Korea (Republic of)', 'South Korean', 1),
(414, 'KW', 'KWT', 'Kuwait', 'Kuwaiti', 0),
(417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz', 0),
(418, 'LA', 'LAO', 'Lao People\'s Democratic Republic', 'Lao, Laotian', 0),
(422, 'LB', 'LBN', 'Lebanon', 'Lebanese', 1),
(426, 'LS', 'LSO', 'Lesotho', 'Basotho', 0),
(428, 'LV', 'LVA', 'Latvia', 'Latvian', 0),
(430, 'LR', 'LBR', 'Liberia', 'Liberian', 0),
(434, 'LY', 'LBY', 'Libya', 'Libyan', 0),
(438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein', 0),
(440, 'LT', 'LTU', 'Lithuania', 'Lithuanian', 0),
(442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg, Luxembourgish', 0),
(446, 'MO', 'MAC', 'Macao', 'Macanese, Chinese', 0),
(450, 'MG', 'MDG', 'Madagascar', 'Malagasy', 0),
(454, 'MW', 'MWI', 'Malawi', 'Malawian', 0),
(458, 'MY', 'MYS', 'Malaysia', 'Malaysian', 1),
(462, 'MV', 'MDV', 'Maldives', 'Maldivian', 0),
(466, 'ML', 'MLI', 'Mali', 'Malian, Malinese', 0),
(470, 'MT', 'MLT', 'Malta', 'Maltese', 0),
(474, 'MQ', 'MTQ', 'Martinique', 'Martiniquais, Martinican', 0),
(478, 'MR', 'MRT', 'Mauritania', 'Mauritanian', 0),
(480, 'MU', 'MUS', 'Mauritius', 'Mauritian', 0),
(484, 'MX', 'MEX', 'Mexico', 'Mexican', 0),
(492, 'MC', 'MCO', 'Monaco', 'Monégasque, Monacan', 0),
(496, 'MN', 'MNG', 'Mongolia', 'Mongolian', 1),
(498, 'MD', 'MDA', 'Moldova (Republic of)', 'Moldovan', 0),
(499, 'ME', 'MNE', 'Montenegro', 'Montenegrin', 0),
(500, 'MS', 'MSR', 'Montserrat', 'Montserratian', 0),
(504, 'MA', 'MAR', 'Morocco', 'Moroccan', 0),
(508, 'MZ', 'MOZ', 'Mozambique', 'Mozambican', 0),
(512, 'OM', 'OMN', 'Oman', 'Omani', 0),
(516, 'NA', 'NAM', 'Namibia', 'Namibian', 0),
(520, 'NR', 'NRU', 'Nauru', 'Nauruan', 0),
(524, 'NP', 'NPL', 'Nepal', 'Nepali, Nepalese', 0),
(528, 'NL', 'NLD', 'Netherlands', 'Dutch, Netherlandic', 0),
(531, 'CW', 'CUW', 'Curaçao', 'Curaçaoan', 0),
(533, 'AW', 'ABW', 'Aruba', 'Aruban', 0),
(534, 'SX', 'SXM', 'Sint Maarten (Dutch part)', 'Sint Maarten', 0),
(535, 'BQ', 'BES', 'Bonaire, Sint Eustatius and Saba', 'Bonaire', 0),
(540, 'NC', 'NCL', 'New Caledonia', 'New Caledonian', 0),
(548, 'VU', 'VUT', 'Vanuatu', 'Ni-Vanuatu, Vanuatuan', 0),
(554, 'NZ', 'NZL', 'New Zealand', 'New Zealand, NZ', 0),
(558, 'NI', 'NIC', 'Nicaragua', 'Nicaraguan', 0),
(562, 'NE', 'NER', 'Niger', 'Nigerien', 0),
(566, 'NG', 'NGA', 'Nigeria', 'Nigerian', 0),
(570, 'NU', 'NIU', 'Niue', 'Niuean', 0),
(574, 'NF', 'NFK', 'Norfolk Island', 'Norfolk Island', 0),
(578, 'NO', 'NOR', 'Norway', 'Norwegian', 0),
(580, 'MP', 'MNP', 'Northern Mariana Islands', 'Northern Marianan', 0),
(581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'American', 0),
(583, 'FM', 'FSM', 'Micronesia (Federated States of)', 'Micronesian', 0),
(584, 'MH', 'MHL', 'Marshall Islands', 'Marshallese', 0),
(585, 'PW', 'PLW', 'Palau', 'Palauan', 0),
(586, 'PK', 'PAK', 'Pakistan', 'Pakistani', 1),
(591, 'PA', 'PAN', 'Panama', 'Panamanian', 0),
(598, 'PG', 'PNG', 'Papua New Guinea', 'Papua New Guinean, Papuan', 0),
(600, 'PY', 'PRY', 'Paraguay', 'Paraguayan', 0),
(604, 'PE', 'PER', 'Peru', 'Peruvian', 0),
(608, 'PH', 'PHL', 'Philippines', 'Philippine, Filipino', 1),
(612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn Island', 0),
(616, 'PL', 'POL', 'Poland', 'Polish', 0),
(620, 'PT', 'PRT', 'Portugal', 'Portuguese', 0),
(624, 'GW', 'GNB', 'Guinea-Bissau', 'Bissau-Guinean', 0),
(626, 'TL', 'TLS', 'Timor-Leste', 'Timorese', 0),
(630, 'PR', 'PRI', 'Puerto Rico', 'Puerto Rican', 0),
(634, 'QA', 'QAT', 'Qatar', 'Qatari', 0),
(638, 'RE', 'REU', 'Réunion', 'Réunionese, Réunionnais', 0),
(642, 'RO', 'ROU', 'Romania', 'Romanian', 0),
(643, 'RU', 'RUS', 'Russian Federation', 'Russian', 0),
(646, 'RW', 'RWA', 'Rwanda', 'Rwandan', 0),
(652, 'BL', 'BLM', 'Saint Barthélemy', 'Barthélemois', 0),
(654, 'SH', 'SHN', 'Saint Helena, Ascension and Tristan da Cunha', 'Saint Helenian', 0),
(659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Kittitian or Nevisian', 0),
(660, 'AI', 'AIA', 'Anguilla', 'Anguillan', 0),
(662, 'LC', 'LCA', 'Saint Lucia', 'Saint Lucian', 0),
(663, 'MF', 'MAF', 'Saint Martin (French part)', 'Saint-Martinoise', 0),
(666, 'PM', 'SPM', 'Saint Pierre and Miquelon', 'Saint-Pierrais or Miquelonnais', 0),
(670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint Vincentian, Vincentian', 0),
(674, 'SM', 'SMR', 'San Marino', 'Sammarinese', 0),
(678, 'ST', 'STP', 'Sao Tome and Principe', 'São Toméan', 0),
(682, 'SA', 'SAU', 'Saudi Arabia', 'Saudi, Saudi Arabian', 0),
(686, 'SN', 'SEN', 'Senegal', 'Senegalese', 0),
(688, 'RS', 'SRB', 'Serbia', 'Serbian', 0),
(690, 'SC', 'SYC', 'Seychelles', 'Seychellois', 0),
(694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leonean', 0),
(702, 'SG', 'SGP', 'Singapore', 'Singaporean', 0),
(703, 'SK', 'SVK', 'Slovakia', 'Slovak', 0),
(704, 'VN', 'VNM', 'Vietnam', 'Vietnamese', 1),
(705, 'SI', 'SVN', 'Slovenia', 'Slovenian, Slovene', 0),
(706, 'SO', 'SOM', 'Somalia', 'Somali, Somalian', 0),
(710, 'ZA', 'ZAF', 'South Africa', 'South African', 0),
(716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwean', 0),
(724, 'ES', 'ESP', 'Spain', 'Spanish', 0),
(728, 'SS', 'SSD', 'South Sudan', 'South Sudanese', 0),
(729, 'SD', 'SDN', 'Sudan', 'Sudanese', 0),
(732, 'EH', 'ESH', 'Western Sahara', 'Sahrawi, Sahrawian, Sahraouian', 0),
(740, 'SR', 'SUR', 'Suriname', 'Surinamese', 0),
(744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard', 0),
(748, 'SZ', 'SWZ', 'Swaziland', 'Swazi', 0),
(752, 'SE', 'SWE', 'Sweden', 'Swedish', 0),
(756, 'CH', 'CHE', 'Switzerland', 'Swiss', 0),
(760, 'SY', 'SYR', 'Syrian Arab Republic', 'Syrian', 1),
(762, 'TJ', 'TJK', 'Tajikistan', 'Tajikistani', 0),
(764, 'TH', 'THA', 'Thailand', 'Thai', 1),
(768, 'TG', 'TGO', 'Togo', 'Togolese', 0),
(772, 'TK', 'TKL', 'Tokelau', 'Tokelauan', 0),
(776, 'TO', 'TON', 'Tonga', 'Tongan', 0),
(780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinidadian or Tobagonian', 0),
(784, 'AE', 'ARE', 'United Arab Emirates', 'Emirati, Emirian, Emiri', 1),
(788, 'TN', 'TUN', 'Tunisia', 'Tunisian', 0),
(792, 'TR', 'TUR', 'Turkey', 'Turkish', 0),
(795, 'TM', 'TKM', 'Turkmenistan', 'Turkmen', 0),
(796, 'TC', 'TCA', 'Turks and Caicos Islands', 'Turks and Caicos Island', 0),
(798, 'TV', 'TUV', 'Tuvalu', 'Tuvaluan', 0),
(800, 'UG', 'UGA', 'Uganda', 'Ugandan', 0),
(804, 'UA', 'UKR', 'Ukraine', 'Ukrainian', 0),
(807, 'MK', 'MKD', 'Macedonia (the former Yugoslav Republic of)', 'Macedonian', 0),
(818, 'EG', 'EGY', 'Egypt', 'Egyptian', 0),
(826, 'GB', 'GBR', 'United Kingdom of Great Britain and Northern Ireland', 'British, UK', 0),
(831, 'GG', 'GGY', 'Guernsey', 'Channel Island', 0),
(832, 'JE', 'JEY', 'Jersey', 'Channel Island', 0),
(833, 'IM', 'IMN', 'Isle of Man', 'Manx', 0),
(834, 'TZ', 'TZA', 'Tanzania, United Republic of', 'Tanzanian', 0),
(840, 'US', 'USA', 'United States of America', 'American', 0),
(850, 'VI', 'VIR', 'Virgin Islands (U.S.)', 'U.S. Virgin Island', 0),
(854, 'BF', 'BFA', 'Burkina Faso', 'Burkinabé', 0),
(858, 'UY', 'URY', 'Uruguay', 'Uruguayan', 0),
(860, 'UZ', 'UZB', 'Uzbekistan', 'Uzbekistani, Uzbek', 0),
(862, 'VE', 'VEN', 'Venezuela (Bolivarian Republic of)', 'Venezuelan', 0),
(876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis and Futuna, Wallisian or Futunan', 0),
(882, 'WS', 'WSM', 'Samoa', 'Samoan', 0),
(887, 'YE', 'YEM', 'Yemen', 'Yemeni', 1),
(894, 'ZM', 'ZMB', 'Zambia', 'Zambian', 0);

-- --------------------------------------------------------

--
-- Table structure for table `map_views`
--

CREATE TABLE `map_views` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` bit(1) NOT NULL DEFAULT b'1',
  `num_code` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `website_views`
--

CREATE TABLE `website_views` (
  `id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `website_views`
--
ALTER TABLE `website_views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `website_views`
--
ALTER TABLE `website_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
