<h2>Open Source : Zip Parser</h2>

<h3>Description:</h3>
<div class='block'>
    <p>
        <em>
            <a href='http://github.com/alanhaggai/Zip-Parser/tree/master'>Zip Parser</a>
        </em> is a
        <a href='http://en.wikipedia.org/wiki/ZIP_(file_format)'>.Zip</a> file
        parser. It is written in 
        <a href='http://en.wikipedia.org/wiki/Perl'>Perl</a> and makes use of
        <a  href='http://search.cpan.org/perldoc?Data::ParseBinary'>Data::ParseBinary</a>
        Perl module. The parser can be used to analyse .Zip archives. It can be
        configured so that only relevant information is output. Some of the uses
        of the parser are:
    </p>

    <ul>
        <li>Identifying damaged archives</li>
        <li>Examining the properties of archives</li>
    </ul>

    <p>
        Properties of archives are useful when a new zip module is to be
        implemented in a language/framework. The properties of archives produced 
        by
        the new module can be checked against the output of <em>Zip 
        Parser</em>.
    </p>
</div>

<h3>Usage:</h3>
<div class='block'>
    <div class='code'>zip_parser.pl FILE</div>
</div>

<h3>Synopsis:</h3>
<div class='block'>
    <p>
        We will build a directory layout with files and directories, create a
        zip archive, clone the GitHub repository and run the zip parser.
    </p>
    <pre><code>a─┐
  ├────b
  │    │
  │    c.txt
  │
  └────d.txt
</code></pre>
    <div class='large-code'>
        <pre><code>$ cd /tmp

$ mkdir -pv a{,/b}
mkdir: created directory `a'
mkdir: created directory `a/b'

$ echo 'This is a file named c.txt' | cat > a/b/c.txt

$ echo 'This is a file named d.txt' | cat > a/d.txt

$ zip -r archive.zip a/
updating: a/ (stored 0%)
updating: a/d.txt (stored 0%)
updating: a/b/ (stored 0%)
updating: a/b/c.txt (stored 0%)

$ git clone git://github.com/alanhaggai/Zip-Parser.git
Initialized empty Git repository in /tmp/Zip-Parser/.git/
remote: Counting objects: 52, done.
remote: Compressing objects: 100% (26/26), done.
remote: Total 52 (delta 16), reused 46 (delta 14)
Receiving objects: 100% (52/52), 16.95 KiB, done.
Resolving deltas: 100% (16/16), done.

$ Zip-Parser/zip_parser archive.zip
</code></pre>
    </div>
</div>

<h3>Output:</h3>
<div class='block'>
    <div class='large-code'>
        <pre><code>        END CENTRAL DIRECTORY RECORD                        
--------------------------------------------------          

.ZIP_File_Comment -> 

.ZIP_File_Comment_Length -> 
        0                   
Number_Of_The_Disk_With_The_Start_Of_The_Central_Directory -> 
        0                                                     
Number_Of_This_Disk ->                                        
        0                                                     
Offset_Of_Start_Of_Central_Directory_With_Respect_To_The_Starting_Disk_Number -> 
        308                                                                      
Size_Of_The_Central_Directory ->                                                 
        302                                                                      
Total_Number_Of_Entries_In_The_Central_Directory ->                              
        4                                                                        
Total_Number_Of_Entries_In_The_Central_Directory_On_This_Disk ->                 
        4                                                                        


        LOCAL FILE HEADER
--------------------------------------------------

CRC-32 ->                                                            
        00000000                                                     
Compressed_Data ->                                                   

Compressed_Size -> 
        0          
Compression_Method -> 
        The file is stored (no compression)
Extra_Field_Length ->                      
        28                                 
Filename ->                                
        a/                                 
Filename_Length ->                         
        2                                  
General_Purpose_Bit_Flag ->                
Last_Mod_File_Date ->                      
Year -> 2009                               
Month -> 7                                 
Day -> 8                                   
Last_Mod_File_Time ->                      
Hour -> 11                                 
Second -> 16                               
Minute -> 57                               
Position ->                                
        60                                 
Uncompressed_Size ->                       
        0                                  
Version_Needed_To_Extract ->               
        Default value                      


CRC-32 -> 
        2f2bbaec
Compressed_Data -> 
        This is a file named d.txt

Compressed_Size -> 
        27         
Compression_Method -> 
        The file is stored (no compression)
Extra_Field_Length ->                      
        28                                 
Filename ->                                
        a/d.txt                            
Filename_Length ->                         
        7                                  
General_Purpose_Bit_Flag ->                
Last_Mod_File_Date ->                      
Year -> 2009                               
Month -> 7                                 
Day -> 8                                   
Last_Mod_File_Time ->                      
Hour -> 11                                 
Second -> 16                               
Minute -> 57                               
Position ->                                
        125                                
Uncompressed_Size ->                       
        27                                 
Version_Needed_To_Extract ->               
        Default value                      


CRC-32 -> 
        00000000
Compressed_Data -> 

Compressed_Size -> 
        0          
Compression_Method -> 
        The file is stored (no compression)
Extra_Field_Length ->                      
        28                                 
Filename ->                                
        a/b/                               
Filename_Length ->                         
        4                                  
General_Purpose_Bit_Flag ->                
Last_Mod_File_Date ->                      
Year -> 2009                               
Month -> 7                                 
Day -> 8                                   
Last_Mod_File_Time ->                      
Hour -> 11                                 
Second -> 23                               
Minute -> 55                               
Position ->                                
        214                                
Uncompressed_Size ->                       
        0                                  
Version_Needed_To_Extract ->               
        Default value                      


CRC-32 -> 
        322e8a54
Compressed_Data -> 
        This is a file named c.txt

Compressed_Size -> 
        27         
Compression_Method -> 
        The file is stored (no compression)
Extra_Field_Length ->                      
        28                                 
Filename ->                                
        a/b/c.txt                          
Filename_Length ->                         
        9                                  
General_Purpose_Bit_Flag ->                
Last_Mod_File_Date ->                      
Year -> 2009                               
Month -> 7                                 
Day -> 8                                   
Last_Mod_File_Time ->                      
Hour -> 11                                 
Second -> 19                               
Minute -> 56                               
Position ->                                
        281                                
Uncompressed_Size ->                       
        27                                 
Version_Needed_To_Extract ->               
        Default value                      


        CENTRAL DIRECTORY RECORD
--------------------------------------------------

CRC-32 -> 
        00000000
Compressed_Size -> 
        0          
Compression_Method -> 
        The file is stored (no compression)
Disk_Number_Start ->                       
        0                                  
External_File_Attributes ->                
        41ed0010                           
Extra_Field ->                             
Data ->                                    
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543b                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
Header ->                                  
        extended timestamp                 
        5303                               
        754a                               
        0100                               
        0003                               
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        5303                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        e903                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        1d03                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
Extra_Field_Length ->                                                       
        24                                                                  
File_Comment ->                                                             

File_Comment_Length -> 
        0              
Filename ->            
        a/             
Filename_Length ->     
        2              
General_Purpose_Bit_Flag ->
Internal_File_Attributes -> 
        0                   
Last_Mod_File_Date ->       
Year -> 2009                
Month -> 7                  
Day -> 8                    
Last_Mod_File_Time ->       
Hour -> 11                  
Second -> 16                
Minute -> 57                
Relative_Offset_Of_Local_Header -> 
        0                          
Uncompressed_Size ->               
        0                          
Version_Made_By ->                 
Compatibility -> 3                 
Specification -> 30                
Version_Needed_To_Extract ->       
        Default value              


CRC-32 -> 
        2f2bbaec
Compressed_Size -> 
        27         
Compression_Method -> 
        The file is stored (no compression)
Disk_Number_Start ->                       
        0                                  
External_File_Attributes ->                
        81a40000                           
Extra_Field ->                             
Data ->                                    
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543b                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
Header ->                                  
        extended timestamp                 
        5303                               
        754a                               
        0100                               
        0003                               
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        5303                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        e903                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        1d03                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
Extra_Field_Length ->                                                       
        24                                                                  
File_Comment ->                                                             

File_Comment_Length -> 
        0              
Filename ->            
        a/d.txt        
Filename_Length ->     
        7              
General_Purpose_Bit_Flag ->
Internal_File_Attributes -> 
        1                   
Last_Mod_File_Date ->       
Year -> 2009                
Month -> 7                  
Day -> 8                    
Last_Mod_File_Time ->       
Hour -> 11                  
Second -> 16                
Minute -> 57                
Relative_Offset_Of_Local_Header -> 
        60                         
Uncompressed_Size ->               
        27                         
Version_Made_By ->                 
Compatibility -> 3                 
Specification -> 30                
Version_Needed_To_Extract ->       
        Default value              


CRC-32 -> 
        00000000
Compressed_Size -> 
        0          
Compression_Method -> 
        The file is stored (no compression)
Disk_Number_Start ->                       
        0                                  
External_File_Attributes ->                
        41ed0010                           
Extra_Field ->                             
Data ->                                    
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543b                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
Header ->                                  
        extended timestamp                 
        5303                               
        754a                               
        0100                               
        0003                               
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        5303                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        e903                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        1d03                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
Extra_Field_Length ->                                                       
        24                                                                  
File_Comment ->                                                             

File_Comment_Length -> 
        0              
Filename ->            
        a/b/           
Filename_Length ->     
        4              
General_Purpose_Bit_Flag ->
Internal_File_Attributes -> 
        0                   
Last_Mod_File_Date ->       
Year -> 2009                
Month -> 7                  
Day -> 8                    
Last_Mod_File_Time ->       
Hour -> 11                  
Second -> 23                
Minute -> 55                
Relative_Offset_Of_Local_Header -> 
        152                        
Uncompressed_Size ->               
        0                          
Version_Made_By ->                 
Compatibility -> 3                 
Specification -> 30                
Version_Needed_To_Extract ->       
        Default value              


CRC-32 -> 
        322e8a54
Compressed_Size -> 
        27         
Compression_Method -> 
        The file is stored (no compression)
Disk_Number_Start ->                       
        0                                  
External_File_Attributes ->                
        81a40000                           
Extra_Field ->                             
Data ->                                    
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543b                               
        0b78                               
        e804                               
        0400                               
        0000                               
        0005                               
        543c                               
        0b78                               
        e804                               
        0400                               
        0000                               
Header ->                                  
        extended timestamp                 
        5303                               
        754a                               
        0100                               
        0003                               
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        5303                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        e903                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
        extended timestamp                                                  
        1d03                                                                
        754a                                                                
        0100                                                                
        0003                                                                
        Reserved for IBM S/390 (Z390), AS/400 (I400) attributes - compressed
Extra_Field_Length ->                                                       
        24                                                                  
File_Comment ->                                                             

File_Comment_Length -> 
        0              
Filename ->            
        a/b/c.txt      
Filename_Length ->     
        9
General_Purpose_Bit_Flag ->
Internal_File_Attributes ->
        1
Last_Mod_File_Date ->
Year -> 2009
Month -> 7
Day -> 8
Last_Mod_File_Time ->
Hour -> 11
Second -> 19
Minute -> 56
Relative_Offset_Of_Local_Header ->
        214
Uncompressed_Size ->
        27
Version_Made_By ->
Compatibility -> 3
Specification -> 30
Version_Needed_To_Extract ->
        Default value</code></pre>
    </div>
</div>

<h3>TODO:</h3>
<ul>
    <li>
        Develop an API which will allow usage from within another application
        or from within a test suite.
    </li>
</ul>
