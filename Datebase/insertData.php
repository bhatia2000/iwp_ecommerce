<!DOCTYPE html>
<html>
<head>
	<title>insert.php</title>
</head>
<body>
	<?php
	
 		$conn=mysqli_connect("localhost","root");

 		mysqli_select_db($conn,"Store");
 		if($conn)
 		{

				$sql = "INSERT INTO Record(Name,Branch,Image, Price,Description, Year) 
				VALUES ('I.J. Nagrath, D. P. Kothari, \“Electric Machines\”, Third Edition, Tata McGraw-Hill Publishing Company Ltd','EEE','https\://pictures.abebooks.com/isbn/9789352606405-us.jpg',488,'Electric Machines, now in its 5\" edition, is intended for third and fourth year UG students and first    year PG students of electrical engineering-updated with latest scientific advancements. The changes are made keeping the original flavor of the book intact, that is, in-depth coverage of fundamental concepts. This edition contains plethora of solved examples, competitive examination based MCQs and MATLAB examples to enhance problem solving skills. The book can be used as a quick reference by practicing engineers and is also  useful to lAS, IES, GATE and other entrance and job examination aspirants preparing for the subject.',3),
				('Prabha Kundur, Power System Analysis and Control , TMH, 2008 ','EEE','https://images-na.ssl-images-amazon.com/images/I/51XxZHJWuOL._SX377_BO1,204,203,200_.jpg',510,'Suitable for electric and utility engineers, Power System Stability And Control, written by Prabha Kundur, comprises of numerous topics on voltage stability, with an aim to present the concepts in a clearer manner. It provides its readers with a generic introduction to the concept of electric power systems, stating its structure, design and operating criteria for stability references. It touches upon both mid-term as well as long-term voltage stability and discusses the problems of power system stability.With over 1000 pages analysing the concepts related to stability, Power System Stability And Control, is an in-depth study of the field of electricals.',3),
				('DR.K.R.Kadiyali, Traffic Engineering and transportation Planning, Khanna Publisher, Seventh edition','CIV','https://images-eu.ssl-images-amazon.com/images/I/51eZFH6q4HL.jpg',2675,'Pearson brings to you the third edition of Transportation Engineering, which offers students and practitioners a detailed, current, and interdisciplinary introduction to transportation engineering and planning. This much praised and widely recommended text has been revered for its wide spectrum coverage encompassing both traditional principlesâ€\"traffic engineering, transportation planning and non-traditional considerations transportation economics, land use, energy, public transport, transportation systems management.',3),
				('Punmia B.C.; Waste Water Engineering; Laxmi Publication, 2002','CIV','https://rukminim1.flixcart.com/image/416/416/jzn0tjk0/book/9/6/1/wastewater-engineering-environmental-engineering-ii-original-imafjhkhsh8vfskf.jpeg?q=70',499,'Waste Water Engineering, written by by Dr. B. C. Punmia, Ashok Kumar Jain, and Arun Kumar Jain, is a book meant for the students of Environmental and Civil Engineering. The book covers the processes involved in the treatment of sewage water. It deals with the collection and management of sewage water, the flow of the sewage water, and the construction of canals. It also mentions the design of the sewers and the different sewer pumps. Further, aspects of sewer pumping and waste water discharge using natural means and the different components of a water treatment plant are mentioned in the book. In addition, this book covers the process of treatment involved in waste water, such as sedimentation and chemical cleaning.',3),
				('Kreyszig, E. \“Advanced Engineering Mathematics\”, John Wiley & Sons','MECH','https://images-na.ssl-images-amazon.com/images/I/51vlzzkNlSL._SX399_BO1,204,203,200_.jpg',669,'The tenth edition of this bestselling text includes examples in more detail and more applied exercises; both changes are aimed at making the material more relevant and accessible to readers. Kreyszig introduces engineers and computer scientists to advanced math topics as they relate to practical problems. It goes into the following topics at great depth differential equations, partial differential equations, Fourier analysis, vector analysis, complex analysis and linear algebra / differential equations.',3),
				('Engineering Optimization: Theory and Practice by Singiresu S. Rao','MECH','https://images-na.ssl-images-amazon.com/images/I/51ZQhvrZJcL._SX343_BO1,204,203,200_.jpg',420,'A rigorous mathematical approach to identify a set of design alternatives and selecting the best candidate from within that set, engineering optimization was developed as a means of helping engineers to design systems that are both more efficient and less expensive and to develop new ways of improving the performance of existing systems.',3),
				(' Mass Transfer Operations, Treybal R.E., McGraw Hill Book Co., New York 1980, 3rd Edition','CME','https://d3525k1ryd2155.cloudfront.net/h/122/515/1074515122.0.x.jpg',654,'The third edition extensively improves and modernize many of the explanation, tomodernize the design data, and to lighten the writing as best as possible. There arecomprehensive discussions of topics as the surface-stretch theroy of mass-transfer,transpiration cooling, new types of tray towers, heatless absorbers, and the like.',3),
				('A. Kayode Coker, Modelling of Chemical Kinetics and Reactor Design, Gulf professional publication','CME','https://images-na.ssl-images-amazon.com/images/I/51AVNuG7gZL._SX331_BO1,204,203,200_.jpg',1895,'Selecting the best type of reactor for any particular chemical reaction, taking into consideration safety, hazard analysis, scale-up, and many other factors is essential to any industrial problem. An understanding of chemical reaction kinetics and the design of chemical reactors is key to the success of the of the chemist and the chemical engineer in such an endeavor. This valuable reference volume conveys a basic understanding of chemical reactor design methodologies, incorporating control, hazard analysis, and other topics not covered in similar texts.',3),
				('Martin John, “Introduction to languages and the theory of computation”, TMH','CSE','https://images-na.ssl-images-amazon.com/images/I/21vXDmwaSQL._BO1,204,203,200_.jpg',379,'\"Introduction to Languages and the Theory of Computation is a highly popular text which provides an introduction to the theory of computation emphasizing on formal languages, automata and abstract models of computation, and computability; it also includes an introduction to computational complexity and NP-completeness.',3),
				('Artificial Intelligence a Modern Approach : Russel and Norvig , Pearson Education, 2nd”, TMH','CSE','https://images-na.ssl-images-amazon.com/images/I/512DrLttdnL._SX377_BO1,204,203,200_.jpg',573,'This edition captures the changes that have taken place in the field of artificial intelligence (AI) since the last edition in 2003. There have been important applications of AI technology, such as the widespread deployment of practical speech recognition, machine translation, autonomous vehicles and household robotics. There have been algorithmic landmarks, such as the solution of the game of checkers. There has also been a great deal of theoretical progress, particularly in areas such as probabilistic reasoning, machine learning and computer vision.',3),
				('M\. H\. Rashid\, \“Power Electronics\, Circuit\, Devices and Applications\"\, Third Edition\, 2000\, Prentice-Hall of India','EEE','https\:\/\/images\-na\.ssl\-images\-amazon\.com\/images\/I\/516AcfOCLKL._SX364_BO1,204,203,200_.jpg',400,'This text covers the basics of emerging areas in power electronics and a broad range of topics such as power switching devices, conversion methods, analysis and techniques and applications. Its unique approach covers the characteristics of semiconductor devices first, then discusses the applications of these devices for power conversions. Four main applications are included\: flexible ac transmissions (FACTs), static switches, power supplies, dc drives and ac drives.',4),
				('Harvey Maylor, Project Management, 3rd Edition, Pearson','CIV','https\://images-na.ssl-images-amazon.com/images/I/11nS73HSRSL._BO1,204,203,200_.jpg',269,'The third edition of this successful textbook represents a major development in content, approach and pedagogy. Combining a strong academic approach with relevant practical cases, the text skillfully shows the range of issues that face project managers through the logic of the 4-D project cycle. Project Management is used extensively to accompany courses on undergraduate, masters and MBA programmes, as well as for in-company training and for professionals wanting to bring themselves up-to-date with developments in the field.',4),
				('Bhatta Remote Sensing and GIS Oxford University press Second Edition.','CIV','https\://images-na.ssl-images-amazon.com/images/I/51wAQQk3UnL._SX377_BO1,204,203,200_.jpg',684,'Beginning with the history and basic concepts of remote sensing and GIS, the book gives an exhaustive coverage of optical, thermal and microwave remote sensing, global navigation satellite systems (such as GPS), digital photogrammetry, visual image analysis, digital image processing, spatial and attribute data model, geospatial analysis, and planning, implementation and management of GIS. It also presents the modern trends of remote sensing and GIS with an illustrated discussion on its numerous applications. The appendices provide the prerequisites required for understanding remote sensing and GIS technology.',4),
				('William Stallings, \“Data and Computer Communications\”, PHI 6th Edition','CSE','https\://images-na.ssl-images-amazon.com/images/I/51QsZVGd5CL._SX360_BO1,204,203,200_.jpg',449,'With a focus on the most current technology and a convenient modular format, this best-selling text from Pearson offers a clear and comprehensive survey of the entire data and computer communications field. Emphasizing both the fundamental principles as well as the critical role of performance in driving protocol and network design, it explores all the critical technical areas in data communications, wide-area networking, local area networking and protocol design in detail.',4),
				('Narayanan K V and Lakshmikutty B, Stoichiometry and Process Calculations, Prentice Hall of India Pvt Ltd, New Delhi 2006','CME','https://images.app.goo.gl/RrYjgAgiGKL8Pxyt8',316,'Designed as a textbook for the undergraduate students of chemical engineering and related disciplines such as biotechnology, polymer technology, petrochemical engineering, electrochemical engineering, environmental engineering and safety engineering, the chief objective of the book is to prepare students to make analysis of chemical processes through calculations and to develop systematic problem-solving skills in them.',2),
                ('Munson BR, Young D F and Okiishi T H , \‘ Fundamentals of Fluid Mechnics\’, 5th Edition, John Wiley & Sons','CME','https://images.app.goo.gl/ErzM7ANqrUEiaGk69',800,'Description With the help of additional features, Fundamentals of Fluid Mechanics helps mechanical and civil engineers connect the theory to the physical world. This is accomplished through more photos throughout the chapters that show fluid phenomena, new Fluids In the News articles, conceptual questions, and new problem types. Learning objectives are included for each chapter. Examples that walk the reader step-by-step through the problem-solving methodology are presented.',2),
                ('McCabe W.L., Smith J.C. and Harriot P., Unit Operations of Chemical Engineering McGraw Hill, New York 2001. 6th Edition','CME','https://images.app.goo.gl/adUmQwHEMM8dbh216',672,'This revised edition provides a comprehensive exposition of the principles of thermodynamics and details their application to chemical processes. The chapters are written in a clear, logically organized manner, and contain an abundance of realistic problems, examples, and illustrations to help students to understand complex concepts.',2),
                ('Rao Y.V.C., Chemical Engineering Thermo dynamics, University press (India) Ltd.','CME','https://images.app.goo.gl/dyP7Tj9JwdFuHT867',443,'This book would serve as a core textbook for the course on chemical engineering thermodynamics for undergraduate students of chemical engineering and chemical technology. Emphasis is on precise and logical presentation of basic principles.',2),
                ('Alam Singh. \“Soil Engineering in Theory and Practice\” Asia Publishing House 1975','CIV','https://images.app.goo.gl/BHzwb5gisUZwAxLv8',372,'This edition has been enlarged by adding three chapters to the already existing thirty three chapters. Chapters included are Leaning Tower of Pisa; Reinforced Earth Embankment; and Anchored Earth Construction. The construction of the leaning tower of Pisa (Italy) was started in 1173 and finally completed in 1370 During construction period itself the tower started tilting. How the tilt has been stopped represents a great geotechnical engineering feat. All these have been briefly given and are not normally available in English literature. The reinforced and anchored earth techniques being presently used in India are described in the next two chapters.',2),
                ('Garde R.J. and Mirajgaokar A.G.; Engineering Fluid Mechanics, Scitech Publication, 2003.','CIV','https://images.app.goo.gl/qf9wMEkNRCWmSycy6',342,'Fluid Mechanics through Problems is a book for both graduate as well as undergraduate students and is meant to introduce students to the subject of fluid mechanics. The book is well - illustrated with accompanying diagrams to help the students in understanding the subject better',2),
                ('B.C. Punmia, A.K Jain, Environmental Engineering I - Water Supply Engineering – Laxmi Publication Pvt. Ltd','CIV','https://images.app.goo.gl/NsiGFQJA7XmF2zfn8',393,'Table of Contents br>Chapter 1. Water systems br>Chapter 2. Hydrology br>Chapter 3. Surface source br>Chapter 4. Ground water: Wells br>Chapter 5. Water demand and quantity br>Chapter 6. Quality of water br>Chapter 7. Br>unit operations br>Chapter 8. Screening and aeration br>Chapter 9.',2),
                ('Singh Gurcharan, Building Construction and Materials, Standard Publisher and Distributor, 1978 New.','CIV','https://images.app.goo.gl/hcSLwKuFShtMGHm69',225,'The popularity of all the earlier thirteenth editions of the books among the students as well as the teachers had made it possible to bring out the fourteenth edition of the book so soon.',2),
                 ('Liu C.L\” Combinatorial Mathematics\”, McGraw Hill Book Compan','CSE','https://images.app.goo.gl/Jm3XbxPcwCs9KeR26',382,'Element of Discrete Mathematics, is recognized for its signature mathematical emphasisand appropriate coverage for a first course taught at the freshmen level. The book presentsthe concepts of Discrete Mathematics from an algorithmic point of view',2),
                ('8085 Microprocessor by Ramesh Gaonkar','CSE','https://images.app.goo.gl/RxjuG7auhRzRvNua9',329,'About the Book: Microprocessor Architecture, Programming and Applications with the 8085 This book provides a comprehensive treatment of the microprocessor, covering both hardware and software based on the 8085 Microprocessor family. This book was first published in 1984 and it has been in the field for nearly three decades. The microprocessor concepts that were at the cutting edge of the technology in the 1970s and 80s have become fundamentals of the computer field. It is gratifying to see such acceptance of the integrated approach to teaching microprocessor concepts.',2),
                ('The C programming language: Brian Kerninghan and Dennis Ritchie, PHI-EEE (or Pearson)','CSE','https://images.app.goo.gl/ZXG2GgoUPnHrWkHz6',289,'The book enumerates the concepts related to C Programming language, as prescribed by ANSI standard. The book elaborates on the basics of procedure oriented programming and the fundamentals of writing C codes.',2),
				('F. P. Beer and Johnston, Vector Mechanics for Engineers: Statics and Dynamics, Tata McGraw Hill.','EM','https://images.app.goo.gl/c9kBohrA5rfys15Z7',850,'The fifth edition of Beer, Johnston, DeWolf, and Mazurek’s Mechanics of Materials maintains the spirit of its successful previous editions that have made this book standard in solid mechanics for over two decades. It provides a precise presentation of subject illustrated with numerous Engineering',1),
				('S. S. Dara and S.S Umare, A Textbook of Engineering Chemistry; S. Chand','Chem','https://images.app.goo.gl/Ujk28QQXbeYYML5s8',490,'A Textbook of Engineering Chemistry” is written exclusively for students of all branches of engineering, keeping in view their professional requirements. A comprehensive book, divided in 26 chapters, in its twelfth edition, with the help of apt revisions, continues to cover the entire syllabus of engineering chemistry for different universities for more than 30 years',1),
				('Vincent Del Toro, \“Electrical Engineering Fundamentals\”, PHI Learning Pvt Ltd','Elec','https://images.app.goo.gl/M64Xb5i3ZKjuvLa47',535,'Electrical Engineering Fundamentals focuses on the five principal zones within the discipline of electrical engineering. The author also develops new content that is more attuned to the needs of the students and uses new fundamental laws to clarify the concepts and ideas in a more structured manner.',1),
				('Jain R. K. and Iyengar S.R.K. , Advanced Engineering Mathematics;Narosa Publishers.','Maths','https://images.app.goo.gl/BPMxDhUUKrH3zoRKA',520,'Based on the authors\' three decades of teaching experience, Advanced Engineering Mathematics presents the fundamentals and theoretical concepts of the subject in an intelligible and easy-to-understand style. The carefully planned chapters make this book an effective tool for teaching the application of mathematics to engineering and scientific problems. ',1)";				
				



				if ($conn->query($sql) === TRUE) 
				{
					echo "<br/>New record created successfully";
				} else 
				{
					echo "<br/>Error: " . $sql . "<br>" . $conn->error;
				}
		}	
 		else
 		{	
 			echo "connection_aborted";
 		}
 	?>
 	
 </body>
</html>