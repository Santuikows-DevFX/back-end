import React from 'react';
import Box from '@mui/material/Box';
import FacebookRoundedIcon from '@mui/icons-material/FacebookRounded';
const Footer = () => {
    return (
        <Box sx={{backgroundColor: 'primary.dark', display: 'flex', justifyContent: 'right',}}> 
         <a href = "https://www.facebook.com/" target='_blank'>  
            <FacebookRoundedIcon sx={{fontSize: '7vmin', p: '1.1vmin', color: 'white', '&:hover': { color: 'yellow', transition: '0.5s',} }} />
         </a>  
        </Box>
    )
}

export default Footer;