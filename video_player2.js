function changeVid(clicked_id)
                    {

                        var newVid = "Valerian.mp4";
                        
                        if(clicked_id === 'vid1'){
                            newVid = 'www.likeit.co.in- Action (2020) 720p Hindi Dubbed[www.lilkeit.co.in].mp4';
                        }
                         if(clicked_id === 'vid2'){
                            newVid = " ";
                        }
                         if(clicked_id === 'vid3'){
                            newVid = "www.likeit.co.in- Action (2020) 720p Hindi Dubbed[www.lilkeit.co.in].mp4";
                        }
                         if(clicked_id === 'vid4'){
                            newVid = "www.likeit.co.in- Bharaate.mp4";
                        }
                         if(clicked_id === 'vid5'){
                            newVid = " ";
                        }
                         if(clicked_id === 'vid6'){
                            newVid = " ";
                        }

                        document.getElementById('player1').src = newVid;
                    }
                    
/*                    
var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com']"); */





